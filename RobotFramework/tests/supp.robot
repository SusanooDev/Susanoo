*** Settings ***
Documentation     Test& documentation
Suite Setup       !SuiteSetup
Suite Teardown    !SuiteTeardown
Library           Selenium2Library

*** Variables ***
${URL}  https://255e-41-83-86-151.eu.ngrok.io
${Liste Button Locator}  xpath: //*[@id="navbarSupportedContent"]/ul/li[2]/a
${Supp Button Locator}  xpath: /html/body/table/tbody/tr[1]/td[6]/a
${Visit Button Locator}  xpath: //*[@id="root"]/div/main/div/div/section[1]/div/footer/button

*** Keywords ***
!SuiteSetup
    Open Browser    about:blank   chrome
    Sleep  2s
    
!SuiteTeardown
    Close All Browsers

Access Page
    Click Element  ${Visit Button Locator}
    Sleep  5s

Check Availability
    Click Element  ${Liste Button Locator}
    Sleep  5s

Suppression
    Click Element  ${Supp Button Locator}
    Sleep  2s

*** Test Cases ***
01_ngrok
    [Documentation]    Test d'accès au lien
    Go To    ${URL}
    Sleep  2s
    Wait Until Page Contains    developer    timeout=10


02_homepage
    [Documentation]    Test d'accès au site
    Access Page
    Sleep  3s
    Wait Until Page Contains    Bienvenue    timeout=10


02_navigation
    [Documentation]    Test Vérification produit
    Sleep  3s
    Check Availability
    Wait Until Page Contains    Détail    timeout=10

03_suppression
    [Documentation]    Test Suppression
    Sleep  3s
    Suppression
    Sleep  3s
    Wait Until Page does NOT contain   ${Supp Button Locator}
    Sleep  3s