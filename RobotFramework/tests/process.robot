*** Settings ***
Documentation     Test& documentation
Suite Setup       !SuiteSetup
Suite Teardown    !SuiteTeardown
Library           Selenium2Library

*** Test Cases ***
Exemple d'utilisation de run process
    Log    Exécuter mon_autre_script.robot
    ${result}    Run Process    robot    mon_autre_script.robot
    Log    Le script mon_autre_script.robot s'est terminé avec le code de sortie ${result}
