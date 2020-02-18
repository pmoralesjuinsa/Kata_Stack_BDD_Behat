Feature: Stack Kata
  lo que dice la descripción

  Background:
    Given The stack with capacity of "3" items

  Scenario: Check empty array
    When I count the items
    Then It should be "0"

  Scenario: Get 1 when push an item
    When I put the item "hola"
    Then I count the items
    Then It should be "1"

  Scenario: Get 1 when put 2 items and delete 1
    When I put the item "bye"
    And I put the item "mec"
    And I pop the stack
    Then I count the items
    And It should be "1"

  Scenario: Get Exception when delete 1 item with empty stack
    When I count the items
    Then I pop the stack
    
  Scenario: Get Exception when push 4 items when max is 3
    Then I put the item "hola"
    And I put the item "bye"
    And I put the item "mec"
    And I put the item "boom"