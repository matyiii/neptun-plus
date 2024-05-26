describe('auth_login', () => {
  beforeEach(() => {
    cy.visit('http://localhost:8000/');
  })

  it('dont login without filling all fields', () => {
	  cy.get('.inline-flex').click();
  })

  it('dont login with invalid credentials', () => {
    cy.get('#neptun_code').type('teszt');
    cy.get('#password').type('teszt');
    cy.get('.inline-flex').click();
    cy.contains('These credentials do not match our records.');
  })

  it('login in succesfully', () => {
    cy.get('#neptun_code').type('admin');
    cy.get('#password').type('password');
    cy.get('.inline-flex').click();
    cy.contains('successfully logged in!');
    cy.url().should('include', '/dashboard');
  })
})