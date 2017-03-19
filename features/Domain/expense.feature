Scenario: Register a new Expense
    Given I am the user
    When I fill the following:
        | 200 | Food Category | May 1st, 2017 |
    Then the record about the expense in amount of 200 in the Food Category made in May 1st, 2017 should be saved, 2017 should be saved.
