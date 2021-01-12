<div>
  <form class="multisteps-form__form" method="POST" wire:submit.prevent="submit">
                    @csrf
                    <div class="multisteps-form__panel">
                      <div class="multisteps-form__content">
                        <!--nom et prenom-->
                        <div class="form-row mt-4">
                          <div class="col-12 col-sm-6">
                            <label for="nom" class="form-label">Nom</label>
                            @error('firstname') <span class="error">{{ $message }}</span> @enderror
                            <input wire:model.lazy="firstname" class="multisteps-form__input form-control" type="text"  placeholder="Nom" id="nom" style="background-color: #c1c1c1;"/> 
                          </div>
                          <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                            <label for="prenom" class="form-label">Prénom</label>
                            @error('lastname') <span class="error">{{ $message }}</span> @enderror
                            <input wire:model.lazy="lastname" class="multisteps-form__input form-control" type="text"  placeholder="Prénom" id="prenom" style="background-color: #c1c1c1;"/> 
                          </div>
                        </div>
                        <!--email-->
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                              <label for="email" class="form-label"> Email </label>
                              @error('email') <span class="error">{{ $message }}</span> @enderror
                              <input wire:model.lazy="email" class="multisteps-form__input form-control" type="text"  placeholder="exemple@mail.com" id="email" style="background-color: #c1c1c1;"/> 
                            </div>
                        </div>
                        <!--occupation et groupe sanguin-->
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-6">
                              <label for="occupation" class="form-label"> Occupation </label>
                              <input wire:model.lazy="occupation" class="multisteps-form__input form-control" type="text"  placeholder="Occupation" id="occupation" style="background-color: #c1c1c1;"/> 
                            </div>
                            <div class="col-12 col-sm-6"> 
                                <label for="occupation" class="form-label"> Groupe sanguin </label>
                                <select wire:model.defer="blood_group" class="multisteps-form__select form-control" style="background-color: #c1c1c1; margin-top: 7%;">
                                    <option selected="selected">  Groupe sanguin  </option>
                                    <option value="A+"> A+ </option>
                                    <option value="A-"> A- </option>
                                    <option value="B+"> B+ </option>
                                    <option value="B-"> B- </option>
                                    <option value="AB+"> AB+ </option>
                                    <option value="AB-"> AB- </option>
                                    <option value="O+"> O+ </option>
                                    <option value="O-"> O- </option>
                                </select>
                            </div>
                        </div>
                        <!--num^2-->
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-6">
                              <label for="num1" class="form-label"> Numéro de téléphone </label>
                              @error('phone') <span class="error">{{ $message }}</span> @enderror
                              <input wire:model.lazy="phone" class="multisteps-form__input form-control" type="text"  placeholder="Numéro de téléphone" id="num1" style="background-color: #c1c1c1;"/>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="num2" class="form-label"> Numéro de téléphone d'urgence </label>
                                @error('phone2') <span class="error">{{ $message }}</span> @enderror
                                <input wire:model.lazy="phone2" class="multisteps-form__input form-control" type="text"  placeholder="Numéro de téléphone d'urgence" id="num2" style="background-color: #c1c1c1;"/>
                              </div>
                        </div>
                        <!--bouton-->
                        <div class="button-row d-flex mt-4">
                          <button class="btn ml-auto js-btn-next" type="submit" title="Next" style="background-color: #a8092f;color: white;font-weight: 500;margin-bottom: 5%;"> S'inscrire </button>
                        </div>
                      </div>
                    </div>
  </form>
</div>
@push("scripts")
  <script>
    window.addEventListener('volunteer-created', event => {
        Swal.fire(
        'Good job!',
        'Merci pour votre inscription!',
        'success'
      )
    });
  </script>
@endpush