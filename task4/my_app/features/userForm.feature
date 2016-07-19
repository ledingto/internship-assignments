Feature: Testing
    In order to verify user form response
    I want to demonstrate how the page reacts to different inputs

    Scenario: All fields empty
        Given I am on the homepage
        When I fill in "name" with ""
        And I fill in "email" with ""
        And I fill in "phone" with ""
        And I press "Register"
        Then I should be on "/"
