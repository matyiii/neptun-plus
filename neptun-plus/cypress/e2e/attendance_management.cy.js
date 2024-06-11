describe('attendance_management', () => {
	beforeEach(() => {
		cy.login('admin', 'password');
		cy.url().should('include', '/dashboard');
		cy.get('[href="http://localhost:8000/attendance_management"]').click();
	})

	it('manage_attendance', () => {
		cy.get(':nth-child(3) > :nth-child(6) > button').click();
		cy.get(':nth-child(1) > :nth-child(3) > [type="checkbox"]').click();
		cy.get(':nth-child(2) > :nth-child(4) > [type="checkbox"]').click();
		cy.get('#submit_btn').click();
		cy.contains('Jelenlét sikeresen rögzítve!');
	})
})