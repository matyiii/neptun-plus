describe('logout', () => {
  it('logout user', () => {
	cy.login('admin', 'password');
	cy.get('.relative > :nth-child(1) > .inline-flex').click();
	cy.get('.rounded-md > form > .block').click();
  })
})