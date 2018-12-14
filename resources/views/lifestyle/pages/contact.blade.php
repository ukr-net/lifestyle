<div class="container background-white">
    <div class="row margin-vert-30">
        <!-- Main Column -->
        <div class="col-md-9">
            <!-- Main Content -->
            <div class="headline">
                <h2>Contact Form</h2>
            </div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor
                sit amet, consectetur adipiscing elit landitiis.</p>
            <br>
            <!-- Contact Form -->
            <form name="contact-form" method="POST" action="{{route('contactForm')}}">
                @csrf
                <label>Name</label>
                <div class="row margin-bottom-20">
                    <div class="col-md-6 col-md-offset-0">
                        <input 
                        class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" 
                        type="text" 
                        name="name" 
                        value="{{old('name', '')}}" 
                        required>
                    </div>
                </div>
                <label>Email
                    <span class="color-red">*</span>
                </label>
                <div class="row margin-bottom-20">
                    <div class="col-md-6 col-md-offset-0">
                        <input 
                        class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" 
                        type="text" 
                        name="email" 
                        value="{{old('email', '')}}" required>
                    </div>
                </div>
                <label>Message</label>
                <div class="row margin-bottom-20">
                    <div class="col-md-8 col-md-offset-0">
                        <textarea 
                        class="form-control" 
                        rows="8" 
                        name="text" 
                        required>{{old('text', '')}}
                        </textarea>
                    </div>
                </div>
                <p>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </p>
            </form>
            <!-- End Contact Form -->
            <!-- End Main Content -->
        </div>
        <!-- End Main Column -->
        <!-- Side Column -->
        <div class="col-md-3">
            @if(isset($sidebar))
                {!!$sidebar!!}
            @endif
        </div>
        <!-- End Side Column -->
    </div>
</div>