const nav=document.querySelector('nav');
const children = nav.children[0].children;
function setFocus(obj = null) {
    for (const child of children) {
        if (obj && child.id == obj.id)
            child.classList.add('nav_link_press')
        else
            child.classList.remove('nav_link_press')
    }
}

(() => {
  const nav = document.querySelector('nav');
  let active = null, down = false;

  nav.addEventListener('pointerdown', e => { const a = e.target.closest('a'); if (!a || e.button) return; e.preventDefault(); down = true; active = a; setFocus(a)}, {passive:false});
  document.addEventListener('pointermove', e => { if (!down) return; active = document.elementFromPoint(e.clientX, e.clientY)?.closest('a') || null; setFocus(active)}, {passive:false});
  document.addEventListener('pointerup', () => { if (!down) return; down = false; if (active) location.hash = active.getAttribute('href'); active = null; });

  document.addEventListener('touchstart', e => { const t = e.changedTouches[0]; const a = document.elementFromPoint(t.clientX, t.clientY)?.closest('a'); if (!a) return; e.preventDefault(); down = true; active = a; }, {passive:false});
  document.addEventListener('touchmove', e => { if (down) e.preventDefault(); const t = e.changedTouches[0]; active = document.elementFromPoint(t.clientX, t.clientY)?.closest('a') || null; }, {passive:false});
  document.addEventListener('touchend', () => { if (!down) return; down = false; if (active) location.hash = active.getAttribute('href'); active = null; }, {passive:false});
})();


nav.addEventListener('pointerdown',()=>nav.classList.add('press'));
document.addEventListener('pointerup',()=>{nav.classList.remove('press'), setFocus()});
document.addEventListener('pointercancel',()=>{nav.classList.remove('press'), setFocus()});