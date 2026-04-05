function switchTab(tab) {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.panel').forEach(p => p.classList.remove('active'));
    document.getElementById('btn-' + tab).classList.add('active');
    document.getElementById('panel-' + tab).classList.add('active');
}
 
function togglePassword(inputId, btn) {
  const input = document.getElementById(inputId);
  const isHidden = input.type === 'password';
  input.type = isHidden ? 'text' : 'password';
  btn.querySelector('svg').style.opacity = isHidden ? '0.4' : '1';
  btn.childNodes[btn.childNodes.length - 1].textContent = isHidden ? ' Hide password' : ' Show password';
}