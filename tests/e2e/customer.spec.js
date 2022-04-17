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
  test('Login', async () => {
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

  test('Update profile', async () => {
    const newUsername = 'Ojan';

    await page.locator('#dropdownMenu2').click();
    await page.locator('#profile').click();

    await page.screenshot({path: ssPath + 'update-profile-before.png'})

    await expect(page.locator('text=Data Diri')).toBeVisible();
    await page.locator('text=Edit').click();
    
    await expect(page.locator('text=Edit Profile')).toBeVisible();
    await page.locator('#name').focus();
    await page.keyboard.down('Control');
    await page.keyboard.press('A');
    await page.keyboard.up('Control');
    await page.keyboard.press('Backspace');

    await page.screenshot({path: ssPath + 'update-profile-clear.png'})

    await page.keyboard.type(newUsername);
    await page.locator('text=Save Changes').click();

    await expect(page.locator('#dropdownMenu2')).toHaveText(newUsername);
    await page.screenshot({path: ssPath + 'update-profile-after.png'})
  });

  test('Logout', async () => {
    await page.locator('#dropdownMenu2').click();
    await page.locator(':text(" Logout")').click();

    await page.screenshot({path: ssPath + 'logout-before.png'})

    await expect(page.locator('text=Sign In')).toBeVisible();
    await page.screenshot({path: ssPath + 'logout-after.png'})
  });
});