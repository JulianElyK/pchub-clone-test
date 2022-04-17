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
  
test.describe('Edit Profile from Login', () => {
  test('Search product', async () => {
    await page.locator('#search').type('geforce rtx');
    await page.keyboard.press('Enter');
    
    await expect(page.locator('h1:has-text("geforce rtx")')).toBeVisible();
    await page.screenshot({path: ssPath + 'search-product.png'})
    
    await page.locator('#search').type('hyperx');
    await page.locator('#btn-search').click();
    
    await expect(page.locator('h1:has-text("hyperx")')).toBeVisible();
  });
});