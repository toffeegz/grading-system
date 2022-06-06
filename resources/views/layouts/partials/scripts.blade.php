{{-- 
    DOUBLE CHECK THE FILE PLEASE
    THIS WONT WORK UNLESS THIS FILE IS A BLADE FILE
--}}

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

    const modalObject = {
        openModal: function (key){
            document.getElementById(key).showModal(); 
            document.body.setAttribute('style', 'overflow: hidden;'); 
            document.getElementById(key).children[0].scrollTop = 0; 
            document.getElementById(key).children[0].classList.remove('opacity-0'); 
            document.getElementById(key).children[0].classList.add('opacity-100');
        },
        closeModal: function (key) {
            document.getElementById(key).children[0].classList.remove('opacity-100');
            document.getElementById(key).children[0].classList.add('opacity-0');
            setTimeout(function () {
                document.getElementById(key).close();
                document.body.removeAttribute('style');
            }, 100);
        },
    }


    document.addEventListener('livewire:load', function () {
        Livewire.on('scrollTop', (el, component) => {
            window.scrollTo({top: 0, behavior: 'smooth'});;
        });
    });

</script>

{{-- ALWAYS USE ME --}}
@yield('page-script')