describe('Jelenlét rögzítő funkció tesztelése', () => {
    it('sikeresen rögzíti a jelenlétet', () => {
      cy.visit('/dashboard');
  
      cy.contains('Jelenlét vezetés').click();
  
      cy.url().should('include', '/attendance-management');
  
    let checkboxStateBefore;

    cy.get('input[type="checkbox"]').first().then(($checkbox) => {
      checkboxStateBefore = $checkbox.prop('checked');
    });

    cy.get('input[type="checkbox"]').first().check();

    cy.get('#submit_btn').click();

    cy.wait(2000);

    cy.get('input[type="checkbox"]').first().should('be.checked');

    cy.get('input[type="checkbox"]').first().then(($checkbox) => {
      expect($checkbox.prop('checked')).to.equal(checkboxStateBefore);
    });
  });
});
  