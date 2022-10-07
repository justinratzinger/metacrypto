@if (Session::has('message'))

 <div class="toast-container position-absolute end-0 p-3"  id="toastPlacement">
    <div class="toast show align-items-center text-white border-0 {{ Session::get('background', 'bg-light') }}" role="alert" aria-live="assertive" aria-atomic="true" >
    <div class="d-flex">
      <div class="toast-body">
        {{ Session::get('message') }}
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>
<style>
    #toastPlacement{
        position: fixed !important;
        z-index: 1;
        margin-top: 6rem;
    }
</style> 


  
@endif