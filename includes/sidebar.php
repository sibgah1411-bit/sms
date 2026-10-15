<style>
    .sms-sidebar {
        min-height: 100vh;
        background-color: #1a5c85; 
        box-shadow: 4px 0 15px rgba(0, 0, 0, 0.15);
        padding-top: 30px;
    }
    .sms-sidebar .nav-link {
        color: #a0aec0;
        font-weight: 500;
        padding: 12px 20px;
        border-radius: 10px;
        margin: 5px 15px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }
    .sms-sidebar .nav-link i {
        font-size: 1.25rem;
        margin-right: 15px;
    }
    .sms-sidebar .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.05);
        color: #fff;
    }
    .sms-sidebar .nav-link.active {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8) !important;
        color: #fff !important;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }
    
</style>
<div class="col-md-3 col-lg-2 sms-sidebar px-0 mt-0  ">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a href="/sms/" class="nav-link <?= strpos($_SERVER['REQUEST_URI'], 'teachers') === false ? 'active' : ''; ?>">
                <i class="bi bi-mortarboard-fill"></i> Students Table
            </a>
        </li>
        <li class="nav-item">
            <a href="/sms/teachers/" class="nav-link <?= strpos($_SERVER['REQUEST_URI'], 'teachers') !== false ? 'active' : ''; ?>">
                <i class="bi bi-person-badge-fill"></i> Teachers Table
            </a>
        </li>
    </ul>
    <ul class="nav nav-pills flex-column w-100 mb-4">
    <div class="border-top border-light border-opacity-10 my-2 mx-3"></div>
    <li class="nav-item">
        <a href="/sms/logout" class="nav-link">
            <i class="bi bi-box-arrow-right text-danger"></i> Logout
        </a>
    </li>
</ul>
</div>