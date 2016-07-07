Feature:
  In order to prove that Behat works as intended
  We want to test the home page for a phrase

  Scenario: Root Test
    Given I am on the homepage
    Then I should see "Whoops, looks like something went wrong."
