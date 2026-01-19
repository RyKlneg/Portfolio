import './bootstrap';

// Simple collapse toggle for buttons using data-collapse-toggle="target-id"
document.addEventListener('click', function (e) {
	const btn = e.target.closest('[data-collapse-toggle]');
	if (!btn) return;
	const targetId = btn.getAttribute('data-collapse-toggle');
	if (!targetId) return;
	const target = document.getElementById(targetId);
	if (!target) return;

	// toggle an inline hidden class; if using Tailwind, 'hidden' works
	if (target.classList.contains('hidden')) {
		target.classList.remove('hidden');
	} else {
		target.classList.add('hidden');
	}
});
