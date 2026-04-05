function openCart() {
    document.getElementById('cart-panel').classList.add('open');
    document.getElementById('wishlist-panel').classList.remove('open');
    document.getElementById('search-overlay').classList.remove('open');
    document.getElementById('overlay').classList.add('active');
    document.body.style.overflow = 'hidden';
  }
 
  function closeCart() {
    document.getElementById('cart-panel').classList.remove('open');
  }
 
  function openWishlist() {
  document.getElementById('wishlist-panel').classList.add('open');
  document.getElementById('cart-panel').classList.remove('open');

  loadWishlist(); // 🔥 OBLIGATOIRE
}
 
  function closeWishlist() {
    document.getElementById('wishlist-panel').classList.remove('open');
  }
 
  function openSearch() {
    document.getElementById('search-overlay').classList.add('open');
    document.getElementById('cart-panel').classList.remove('open');
    document.getElementById('wishlist-panel').classList.remove('open');
    document.getElementById('overlay').classList.remove('active');
    document.body.style.overflow = 'hidden';
    setTimeout(() => document.getElementById('search-input').focus(), 300);
  }
 
  function closeSearch() {
    document.getElementById('search-overlay').classList.remove('open');
    document.body.style.overflow = '';
  }
 
  function closeAll() {
    document.getElementById('cart-panel').classList.remove('open');
    document.getElementById('wishlist-panel').classList.remove('open');
    document.getElementById('search-overlay').classList.remove('open');
    document.getElementById('overlay').classList.remove('active');
    document.body.style.overflow = '';
  }
 
  function toggleMobileNav() {
    document.getElementById('main-nav').classList.toggle('mobile-open');
  }
 
  // Close search on Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeAll();
  });

  function changeQty(key, delta) {
    fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
      method: 'POST',
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
      body: 'action=update_cart_qty&key=' + key + '&delta=' + delta
    })
    .then(res => res.text())
    .then(() => location.reload());
  }

  function removeItem(key) {
    fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
      method: 'POST',
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
      body: 'action=remove_cart_item&key=' + key
    })
    .then(res => res.text())
    .then(() => location.reload());
  }

  // ===== ADD / REMOVE WISHLIST =====
document.addEventListener('click', function(e) {
  const btn = e.target.closest('.wishlist-btn');
  if (!btn) return;

  const id = btn.dataset.id;

  fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: 'action=toggle_wishlist&product_id=' + id
  })
  .then(res => res.text())
  .then(count => {
    updateWishlistBadge(count);
    loadWishlist();
  });
});

// ===== LOAD WISHLIST =====
function loadWishlist() {
  fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: 'action=get_wishlist'
  })
  .then(res => res.json())
  .then(items => {

    const container = document.getElementById('wishlist-content');

    if (!items.length) {
      container.innerHTML = `
        <p class="panel-empty-text">
          Aucun produit dans vos favoris
        </p>
      `;
      return;
    }

    container.innerHTML = items.map(p => `
      <div class="cart-item">

        <img src="${p.img}" />

        <div class="cart-item-info">
          <span class="cart-item-name">${p.name}</span>
          <span class="cart-item-price">${p.price}</span>

          <div style="margin-top:6px;">
            <a href="<?php echo wc_get_cart_url(); ?>?add-to-cart=${p.id}">
              Ajouter au panier
            </a>
          </div>
        </div>

        <button onclick="removeWishlist(${p.id})" class="cart-remove">
          ✕
        </button>

      </div>
    `).join('');
  });
}

// ===== REMOVE =====
function removeWishlist(id) {
  fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: 'action=toggle_wishlist&product_id=' + id
  })
  .then(() => loadWishlist());
}

// ===== BADGE =====
function updateWishlistBadge(count) {
  const badges = document.querySelectorAll('.badge');
  if (badges[1]) {
    badges[1].innerText = count;
  }
}
