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
  
test.describe('Shipment & Receive Product', () => {
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
  
  test('Ship product', async () => {
    await page.locator('#dropdownMenu2').click();
    await page.locator('text=Shipment').click();

    await expect(page.locator('h1:has-text("Shipment")')).toBeVisible();
    await expect(page.locator('table >> button >> nth=0')).toBeVisible();
    await page.screenshot({path: ssPath + 'admin-ship-before.png'});

    await page.locator('table >> button >> nth=0').click();

    await expect(page.locator('div.alert-success')).toBeVisible();
    await page.screenshot({path: ssPath + 'admin-ship-after.png'});
  });

  test('Logout Admin', async () => {
    await page.locator('#dropdownMenu2').click();
    await page.locator(':text(" Logout")').click();

    await page.screenshot({path: ssPath + 'admin-logout-before.png'})

    await expect(page.locator('text=Sign In')).toBeVisible();
    await page.screenshot({path: ssPath + 'admin-logout-after.png'})
  });

  test('Login customer', async () => {
    await page.locator('text=Sign In').click();

    await page.screenshot({path: ssPath + 'sign-in-before.png'});
    await page.locator('#signin_email').type('ojan@gmail.com');
    await page.locator('#signin_password').type('12345');
    
    await expect(page.locator('h2:has-text("Login")')).toBeVisible();
    await page.screenshot({path: ssPath + 'sign-in-filled.png'});
    await page.locator('input:has-text("Login")').click();
    
    await expect(page.locator('#dropdownMenu2')).toBeVisible();
    await page.screenshot({path: ssPath + 'sign-in-after.png'});
  });

  test('Receive product', async () => {
    await page.locator('#dropdownMenu2').click();
    await page.locator('text=Order').click();

    await expect(page.locator('text=Sudah Diterima >> nth=0')).toBeVisible();
    await page.screenshot({path: ssPath + 'receive-product-before.png'});

    await page.locator('text=Sudah Diterima >> nth=0').click();

    await expect(page.locator('div.alert-success')).toBeVisible();
    await page.screenshot({path: ssPath + 'receive-product-after.png'});
  });
});