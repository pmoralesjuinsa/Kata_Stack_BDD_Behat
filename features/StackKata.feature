Feature: Stack Kata
  lo que dice la descripción

  Scenario: Check empty array
    Given The stack
    When I count the items
    Then It should be "0"

  Scenario: Push an item
    Given The stack
    When I put the item "hola"