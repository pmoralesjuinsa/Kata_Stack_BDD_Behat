Feature: Stack Kata
  lo que dice la descripción

  Background:
    Given The stack

  Scenario: Check empty array
    When I count the items
    Then It should be "0"

  Scenario: Push an item
    When I put the item "hola"
    Then I count the items
    Then It should be "1"

  Scenario: Put an item
    When I put the item "bye"
    And I put the item "mec"
    And I pop the stack