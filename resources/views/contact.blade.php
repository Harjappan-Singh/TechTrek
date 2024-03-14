@extends('layouts.app')

@section('content')

<div class="w-4/5 mx-auto py-20 border-b border-gray-200 ">
    <div class="flex justify-between">
        <div class="flex flex-col">
            <div class="flex justify-between flex-col mt-[80px] space-y-4">
            <h2 class="text-4xl text-white tracking-wide font-bold p-8 my-4">Contact Us</h2>
            <p class="text-white pt-2 my-[40px] mb-4 text-xl">Should you have any feedback or queries, please feel free to reach out to us without hesitation.</p>
            </div>
            

            <div class="flex justify-between flex-col mt-[80px] space-y-4">
                <div class="text-white flex">
                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 28 28"><path fill="currentColor" d="m7.85 2.703l1.937-.584a2.75 2.75 0 0 1 3.301 1.506l1.358 3.02a2.75 2.75 0 0 1-.633 3.14l-2.067 1.926c-.277.263-.067 1.288.945 3.042c1.013 1.755 1.796 2.449 2.157 2.341l2.708-.828a2.75 2.75 0 0 1 3.034 1.02l1.93 2.675a2.75 2.75 0 0 1-.339 3.606l-1.492 1.413a3.75 3.75 0 0 1-3.676.863c-3.126-.957-6.021-3.797-8.724-8.48C5.58 12.673 4.557 8.717 5.27 5.485a3.75 3.75 0 0 1 2.58-2.782"/></svg></span>
                    <span class="px-3 text-xl text-center py-3">+353 875099119</span>
                </div>
                <div class="text-white flex">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m-.4 4.25l-7.07 4.42c-.32.2-.74.2-1.06 0L4.4 8.25a.85.85 0 1 1 .9-1.44L12 11l6.7-4.19a.85.85 0 1 1 .9 1.44"/></svg></span>
                    <span class="px-3 text-xl text-center py-3">singhharjappan@gmail.com</span>
                </div>
                <div class="text-white flex">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="m7.539 14.841l.003.003l.002.002a.755.755 0 0 0 .912 0l.002-.002l.003-.003l.012-.009a5.57 5.57 0 0 0 .19-.153a15.588 15.588 0 0 0 2.046-2.082C11.81 11.235 13 9.255 13 7A5 5 0 0 0 3 7c0 2.255 1.19 4.235 2.292 5.597a15.591 15.591 0 0 0 2.046 2.082a8.916 8.916 0 0 0 .189.153zM8 8.5a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3" clip-rule="evenodd"/></svg></span>
                    <span class="px-3 text-xl text-center py-3">TechTrek, Dublin Rd, Marshes Upper, Dundalk, Co. Louth, A91 K584</span>
                </div>
            </div>
            
        </div>
        <div>
            <section class="flex flex-col bg-transparent break-words  py-8 px-10 ">

                <form action="https://api.web3forms.com/submit" method="POST" class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8">
                    @csrf

                        <input type="hidden" name="access_key" value="e3f16e61-52c7-47fb-817c-86fbffd65ba2">

                    <div class="flex flex-col">
                        <label for="name" class="block text-white text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Your Name') }}:
                        </label>
                        <input id="name" type="text" class="form-input w-full p-2" name="name" required autofocus>
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="block text-white text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>
                        <input id="email" type="email" class="form-input w-full p-2" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>

                    <div class="flex flex-col">
                        <label for="message" class="block text-white text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Message') }}:
                        </label>
                        <textarea id="message" name="message" cols="30" rows="10" class="form-textarea w-full p-2" required></textarea>
                    </div>

                    <div class="flex flex-col p-5">
                        <button type="submit" class="w-full bg-darkBlue text-white font-bold py-3 px-6 rounded-lg transition duration-300 ease-in-out hover:bg-pink">
                            {{ __('Send Message') }}
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

@endsection
