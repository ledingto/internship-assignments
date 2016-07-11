Feature: Testing
    In order to verify user form response
    I want to demonstrate how the page reacts to different inputs

    Scenario: Name empty Email empty
        Given I am on the homepage
        When I fill in "name" with ""
        And I fill in "email" with ""
        And I press "Register"
        Then I should be on "/"

    Scenario: Name valid Email valid
        Given I am on the homepage
        When I fill in "name" with "Bob"
        Then the "name" field should contain "Bob"
        And I fill in "email" with "bob@email.com"
        And I press "Register"
        Then I should be on "/userSuccess"
