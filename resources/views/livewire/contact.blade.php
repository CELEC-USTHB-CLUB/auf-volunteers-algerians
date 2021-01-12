<div >
	<form wire:submit.prevent="submit" method="POST">
			@csrf
              <div class="login">
                  <h2>Nous Contactez ! </h2>
                  <div class="text_box"> 
                  		@error('firstname') <span class="error">{{ $message }}</span> @enderror
                      <input wire:model.lazy="firstname" type="text"  placeholder=" Nom">
                  </div>
                  <div class="text_box"> 
                  	@error('lastname') <span class="error">{{ $message }}</span> @enderror
                    <input wire:model.lazy="lastname" type="text"  placeholder=" Prénom">
                  </div>

                  <div class="text_box">
                  	@error('email') <span class="error">{{ $message }}</span> @enderror
                  <input wire:model.lazy="email" type="email" name="" placeholder="Email">
                  </div>

                  <div class="text_box">
                  	@error('message') <span class="error">{{ $message }}</span> @enderror
                  <input wire:model.lazy="message" type="text" name="" placeholder="enter votre message" >
                  </div>

                  <div class="button-row d-flex mt-4">
                    <button class="btn ml-auto js-btn-next" type="submit" title="Next" style="background-color: #a8092f;color: white;font-weight: 500;margin-bottom: 5%;"> Envoyer </button>
                  </div>
              </div>     
    </form>
</div>
@push("scripts")
<script>
    window.addEventListener('message-created', event => {
        Swal.fire(
        'Good job!',
        'Votre message est envoyé, merci.',
        'success'
      )
    });
  </script>
@endpush