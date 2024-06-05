describe('navigation', () => {
	beforeEach(() => {
		cy.login('admin', 'password');
		cy.url().should('include', '/dashboard');
	})
  
	it('navigate_to_courses', () => {
		cy.get('[href="http://localhost:8000/courses"]').click();
		cy.url().should('include', '/courses');
	})

	it('navigate_to_schedule', () => {
		cy.get('[href="http://localhost:8000/schedule"]').click();
		cy.url().should('include', '/schedule');
	})

	it('navigate_to_attendance_management', () => {
		cy.get('[href="http://localhost:8000/attendance_management"]').click();
		cy.url().should('include', '/attendance_management');
	})
  })