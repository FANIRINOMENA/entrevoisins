function setThumb(el, src) {
    document.querySelectorAll('.thumb').forEach(t => t.classList.remove('active'));
    el.classList.add('active');
    document.getElementById('mainImg').src = src;
}
 
function changeQty(delta) {
    const input = document.getElementById('qty');
    const val = parseInt(input.value) + delta;
    if (val >= 1) input.value = val;
}
 
function toggleAccordion() {
    const header = document.getElementById('accHeader');
    const body = document.getElementById('accBody');
    header.classList.toggle('open');
    body.classList.toggle('open');
}
 
  // open by default
 document.getElementById('accHeader').classList.add('open');