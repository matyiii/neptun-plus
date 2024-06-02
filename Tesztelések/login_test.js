describe('Login Functionality', () => {
    it('should successfully log in with valid credentials', () => {
      cy.visit('/login');
  
      cy.get('input[name="neptun_code"]').type('abab');
  
      cy.get('input[name="password"]').type('abababab');
  
      cy.get('button[type="submit"]').click();

      cy.url().should('include', '/dashboard');
      cy.get('.welcome-message').should('contain', 'abab successfully logged in!');
    });
  
    it('should show an error with invalid credentials', () => {
      cy.visit('/login');
  
      cy.get('input[name="neptun_code"]').type('wrong');
  
      cy.get('input[name="password"]').type('wrongpassword');

      cy.get('button[type="submit"]').click();
  
      cy.get('.error-message').should('contain', 'These credentials do not match our records.');
    });
  });
  