const {chromium, default: test, expect } = require('@playwright/test');

const ssPath = 'tests/e2e/screenshots/';

let browser = null;
let page = null;

test.beforeAll(async () => {
  browser = await chromium.launch({headless: false, slowMo: 500});
  page = await browser.newPage();
});

test.beforeEach(async () => {
  await page.goto('http://127.0.0.1:8000/');
});

test.afterAll(async () => {
  await browser.close();
});
  
test.describe('some Admin features', () => {
  test('Login Admin', async () => {
    await page.locator('text=Sign In').click();

    await page.screenshot({path: ssPath + 'admin-login-before.png'});
    await page.locator('#signin_email').type('admin@gmail.com');
    await page.locator('#signin_password').type('12345');
    
    await expect(page.locator('h2:has-text("Login")')).toBeVisible();
    await page.screenshot({path: ssPath + 'admin-login-filled.png'});
    await page.locator('input:has-text("Login")').click();
    
    await expect(page.locator('#dropdownMenu2')).toBeVisible();
    await page.screenshot({path: ssPath + 'admin-login-after.png'});
  });
  
  test('Show list products', async () => {
    await page.locator('#dropdownMenu2').click();
    await page.locator('text="Show Product"').click();

    await expect(page.locator('text="All Products"')).toBeVisible();
    await page.screenshot({path: ssPath + 'admin-show-product.png'});
  });

  test('Show order history', async () => {
    await page.locator('#dropdownMenu2').click();
    await page.locator('text="Order History"').click();

    await expect(page.locator('h1:has-text("Order History")')).toBeVisible();
    await page.screenshot({path: ssPath + 'admin-order-history.png'});
  });

  test('Update product', async () => {
    await page.locator('#dropdownMenu2').click();
    await page.locator('text="Edit Product"').click();

    await expect(page.locator('text="Search ID"')).toBeVisible();
    await page.screenshot({path: ssPath + 'admin-edit-product-search.png'});

    await page.locator('#id').type('3');
    await page.locator('button:has-text("Edit Product")').click();

    await expect(page.locator('h1:has-text("Edit Product")')).toBeVisible();
    await page.screenshot({path: ssPath + 'admin-edit-product-before.png'});
    
    await page.locator('#stock').focus();
    await page.keyboard.down('Control');
    await page.keyboard.press('A');
    await page.keyboard.up('Control');
    await page.keyboard.press('Backspace');
    
    await page.screenshot({path: ssPath + 'admin-edit-product-clear.png'});

    await page.keyboard.type('200');
    await page.locator('button:has-text("Submit")').click();

    await expect(page.locator('div.alert-success')).toBeVisible();
    await page.screenshot({path: ssPath + 'admin-edit-product-after.png'});
  });

  test('Logout Admin', async () => {
    await page.locator('#dropdownMenu2').click();
    await page.locator(':text(" Logout")').click();

    await page.screenshot({path: ssPath + 'admin-logout-before.png'})

    await expect(page.locator('text=Sign In')).toBeVisible();
    await page.screenshot({path: ssPath + 'admin-logout-after.png'})
  });
});