const {chromium, default: test, expect } = require('@playwright/test');

const ssPath = 'tests/e2e/screenshots/';

let browser = null;
let page = null;

test.beforeAll(async () => {
  browser = await chromium.launch({headless: false, slowMo: 500});
  page = await browser.newPage();
  await page.goto('http://127.0.0.1:8000/');
});

test.afterAll(async () => {
  await browser.close();
});
  
test.describe('Buy Product from Login', () => {
  test('Login', async () => {
    await page.locator('text=Sign In').click();

    await page.locator('#signin_email').type('ojan@gmail.com');
    await page.locator('#signin_password').type('12345');
    
    await expect(page.locator('h2:has-text("Login")')).toBeVisible();
    await page.locator('input:has-text("Login")').click();
    
    await expect(page.locator('#dropdownMenu2')).toBeVisible();
  });
  
  test('Go to Products', async () => {
    await page.locator('text="PRODUCT"').click();
    
    await expect(page.locator('text=Showing All Products')).toBeVisible();
    await page.screenshot({path: ssPath + 'product-page.png'});
  });

  test('Choose product', async () => {
    await page.locator('div.card-body >> a >> nth=1').click();

    await expect(page.locator('div.detail-product-form')).toBeVisible();
    await page.screenshot({path: ssPath + 'product-detail.png'});
  });
  
  test('Add to cart', async () => {
    await page.locator('#quantity').focus();
    await page.keyboard.press('ArrowUp');
    await page.keyboard.press('ArrowUp');
    
    await page.screenshot({path: ssPath + 'product-set-quantity.png'});
    
    await page.locator('#beli').click();

    await expect(page.locator('div.alert-success')).toBeVisible();
    await page.screenshot({path: ssPath + 'product-added.png'});
  });

  test('Buy custom PC', async () => {
    await page.locator('text="CUSTOM PC"').click();

    await expect(page.locator('h1.judul:has-text("Custom")')).toBeVisible();
    await page.screenshot({path: ssPath + 'custom-pc-page.png'});
    
    await page.selectOption('select#insertMotherboard', {index: 1});
    await page.selectOption('select#insertProcessor', {index: 1});
    await page.selectOption('select#insertVga', {index: 1});
    await page.selectOption('select#insertSsd', {index: 2});
    await page.locator('input:has-text("+") >> nth=4').click();

    await page.screenshot({path: ssPath + 'custome-pc-selected-custom.png'});

    await page.locator('text=Beli').click();

    await expect(page.locator('div.alert-success')).toBeVisible();
    await page.screenshot({path: ssPath + 'custom-pc-added.png'});
  });

  test('Delete cart item', async () => {
    await page.locator('#dropdownMenu2').click();
    await page.locator('text="Cart"').click();

    await expect(page.locator('text=Shopping Cart')).toBeVisible();
    await page.screenshot({path: ssPath + 'cart-page.png'});
    await page.locator('button:has-text("Delete") >> nth=1').click();

    await expect(page.locator('div.alert-success')).toBeVisible();
    await page.screenshot({path: ssPath + 'cart-delete-item.png'});
  });

  test('Bayar cart', async () => {
    await page.locator('text=Bayar').click();
    
    await expect(page.locator('h2.h2-in:has-text("Order Summary")')).toBeVisible();
    await page.screenshot({path: ssPath + 'bayar-cart-page.png'});
    
    await page.locator('label:has-text("Bank Transfer")').click();
    await page.locator('#name').type('Ojan');
    await page.locator('#cardnumber').type('123456');
    await page.locator('label:has-text("Ninja Express")').click();
    await page.locator('#address').type('BHC');
    
    await page.screenshot({path: ssPath + 'bayar-cart-filled.png'});

    await page.locator('text=PURCHASE NOW').click();

    await expect(page.locator('div.alert-success')).toBeVisible();
    await page.screenshot({path: ssPath + 'bayar-cart-finished.png'});
  });
});