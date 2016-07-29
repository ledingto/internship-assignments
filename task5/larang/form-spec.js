describe('Protractor Demo App', function() {
  it('should submit form', function() {
    browser.get('http://localhost:8000');
    element(by.model('userData.name')).sendKeys("Laura");
    element(by.model('userData.email')).sendKeys("laura@email.com");
    element(by.model('userData.phone')).sendKeys("2223334444");

    element(by.id('btn')).click();

    expect(element(by.id("thankyou")).getText()).
        toEqual('Thank You');
  });
});
