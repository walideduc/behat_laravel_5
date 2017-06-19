Feature: Testing
  In order to learn behat
  I do some tests

  Scenario: Home page
    Given I am on the homepage
    Then I should see "Laravel"

  Scenario: Dashboard is locked to guest
    When I go to "home"
    Then the url should match "login"
    And I can do some thing with Laravel