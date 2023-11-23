    <script src="../js/jquery.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $(".nav-link").click(function() {
                // Remove active class from all tabs
                $(".nav-link").removeClass("active");

                // Add active class to the clicked tab
                $(this).addClass("active");
            });

        });
    </script>
