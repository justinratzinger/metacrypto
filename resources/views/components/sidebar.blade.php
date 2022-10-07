@auth
<div id="sidebar">
    <div class="menu">
      <div class="profile-details">
        <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-No-Background.png" alt="">
        <p class="h3">{{ Auth::user()->name }}</p>
      </div>

        <div class="item"><a href="/dashboard"><i class="fas fa-desktop"></i>Dashboard</a></div>
        <div class="item"><a href="/profile"><i class="fa fa-user"></i>Profile</a></div>
        <div class="item">
          <a class="sub-btn"><i class="fa-solid fa-wallet"></i>Wallet<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="/deposit" class="sub-item"><i class="bi bi-bank"></i>Deposit</a>
            <a href="/withdraw" class="sub-item"><i class="bi bi-cash"></i>Withdraw</a>
          </div>
        </div>
        <div class="item"><a href="/investments"><i class="bi bi-piggy-bank"></i>Investments</a></div>
        <div class="item"><a href="/referrals"><i class="fa fa-user-plus"></i>Referrals</a></div>
    </div>
  </div>
@endauth