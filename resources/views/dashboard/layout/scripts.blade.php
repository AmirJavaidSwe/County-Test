


@stack('scripts')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



    <script>
        const select = (el, all = false) => {
            el = el.trim();
            if (all) {
                return [...document.querySelectorAll(el)];
            } else {
                return document.querySelector(el);
            }
        };

        const on = (type, el, listener, all = false) => {
            if (all) {
                select(el, all).forEach(e => e.addEventListener(type, listener));
            } else {
                select(el, all).addEventListener(type, listener);
            }
        };

        if (select('.toggle-sidebar-btn')) {
            on('click', '.toggle-sidebar-btn', function(e) {
                const body = select('body');
                const sidebarToggleIcon = select('#sidebar-toggle-icon');

                body.classList.toggle('toggle-sidebar');

                if (body.classList.contains('toggle-sidebar')) {
                    sidebarToggleIcon.classList.remove('bi-arrow-left');
                    sidebarToggleIcon.classList.add('bi-arrow-right');
                } else {
                    sidebarToggleIcon.classList.remove('bi-arrow-right');
                    sidebarToggleIcon.classList.add('bi-arrow-left');
                }
            });
        }


        document.addEventListener('DOMContentLoaded', () => {
            const select = document.getElementById('account-status');
            
            select.addEventListener('change', () => {
                console.log(`Selected: ${select.value}`);
            });
        });
    </script>