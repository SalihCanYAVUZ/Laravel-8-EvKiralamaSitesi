




            <div class="review-submission">
                <br><br><br>
                <!-- Rate -->
                <div class="review-submit">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form  class="review-form row" wire:submit.prevent="store">
                        @csrf
                        <h4 class="text">Yorumunuzu yazınız..</h4>
                        <div class="col-lg-12">
                            <input type="text" wire:model="subject" class="input form-control" placeholder="Konu">
                            @error('subject')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-12">
                            <textarea rows="10" wire:model="review" class="input form-control" placeholder="Mesaj"></textarea>
                            @error('review')<span class="text-danger">{{ $message }}</span>@enderror
                            <div class="form-group">
                                <div class="input-raiting">
                                    @error('rate')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        @auth
                            <input type="submit" class="btn btn-main" value="Gönder">
                        @else
                            <a href="/login" class="primary-btn">Göndermek için giriş yapınız.</a>
                        @endauth

                    </form>
                    @livewireScripts
                </div>
            </div>
        </div>
    </div>

