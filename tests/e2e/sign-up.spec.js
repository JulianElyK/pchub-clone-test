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
  
test.describe('Sign Up form fill', () => {
  test('Register', async () => {
    await page.locator('text=Sign In').click();

    await page.screenshot({path: ssPath + 'sign-up-before.png'});
    await page.locator('[name=name]').type('azareal');
    await page.locator('div.container-left >> [name=email]').type('azajan@gmail.com');
    await page.locator('[name=phone]').type('08888800000');
    await page.locator('div.container-left >> [name=password]').type('54321');
    await page.locator('div.container-left >> [name=confirm]').type('54321');
    
    await page.screenshot({path: ssPath + 'sign-up-filled.png'});
    
    await page.locator('input:has-text("Sign Up")').click();
    
    await expect(page.locator('[name=name]')).toBeEmpty();
    await page.screenshot({path: ssPath + 'sign-up-after.png'});
  });
});