function toggle(el) {
    const item = el.closest('.faq-item');
    const answer = item.querySelector('.faq-answer');
    const icon = el.querySelector('.faq-icon');
    const isOpen = answer.classList.contains('open');

    if (isOpen) {
      answer.classList.remove('open');
      el.classList.remove('open');
      icon.textContent = '+';
    } else {
      answer.classList.add('open');
      el.classList.add('open');
      icon.textContent = '−';
    }
  }