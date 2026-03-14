(() => {
  const nav = document.querySelector('nav');
  let active = null, down = false;
  nav.addEventListener('pointerdown', e => {
    const a = e.target.closest('a'); if (!a || e.button) return;
    e.preventDefault(); down = true; active = a;
  });
  document.addEventListener('pointermove', e => {
    if (!down) return;
    active = document.elementFromPoint(e.clientX, e.clientY)?.closest('a') || null;
  });
  document.addEventListener('pointerup', () => {
    if (!down) return; down = false;
    if (active) location.href = active.getAttribute('href');
    active = null;
  });
})();