*** Settings ***
Documentation     Test& documentation
Suite Setup       !SuiteSetup
Suite Teardown    !SuiteTeardown
Library           Selenium2Library

*** Variables ***
${URL}  https://255e-41-83-86-151.eu.ngrok.io
${PageAjout Button Locator}  xpath: //*[@id="navbarSupportedContent"]/ul/li[1]/a 
${Visit Button Locator}  xpath: //*[@id="root"]/div/main/div/div/section[1]/div/footer/button
${nomProduit}   susanoo
${prixProduit}   50
${stockProduit}   5
${descriptionProduit}   produit de susanoo
${nomProduit location}  xpath: /html/body/div[1]/form/fieldset/div[1]/input
${prixProduit location}  xpath: /html/body/div[1]/form/fieldset/div[2]/input
${stockProduit location}  xpath: /html/body/div[1]/form/fieldset/div[3]/input
${descriptionProduit location}  xpath: /html/body/div[1]/form/fieldset/div[4]/textarea
${ajout location}  xpath: /html/body/div[1]/form/fieldset/div[5]/input

*** Keywords ***
!SuiteSetup
    Open Browser    about:blank   chrome
    Sleep  2s
    
!SuiteTeardown
    Close All Browsers

Check Availability
    Click Element  ${PageAjout Button Locator}
    Sleep  5s

Access Page
    Click Element  ${Visit Button Locator}
    Sleep  5s

Ajout Produit
    Input Text   ${nomProduit location}   ${nomProduit}
    Sleep  1s
    Input Text   ${prixProduit location}   ${prixProduit}
    Sleep  1s
    Input Text   ${stockProduit location}   ${stockProduit}
    Sleep  1s
    Input Text   ${descriptionProduit location}   ${descriptionProduit}
    Sleep  1s
    Click Element  ${ajout location}
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
    Sleep  5s
    Wait Until Page Contains    Bienvenue    timeout=10


03_navigation
    [Documentation]    Test Vérification page ajout
    Sleep  3s
    Check Availability
    Sleep  3s
    Wait Until Page Contains    Ajouter    timeout=10


04_ajout
    [Documentation]    Test d'ajout d'un produit
    Sleep  2s
    Ajout Produit
    Sleep  5s
    Wait Until Page Contains    susanoo    timeout=10

