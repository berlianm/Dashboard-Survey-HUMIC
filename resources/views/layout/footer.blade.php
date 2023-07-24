        <footer class="footer mg-t-auto">
            <div>
                <span>HUMIC Engineering Telkom University</span>
            </div>
            <div>
            </div>
        </footer>
        <script>
        @if($message = session('success'))
        Swal.fire(
            'Good job!',
            '{{ $message }}',
            'success'
        )
        @endif
        @if($message = session('error'))
        Swal.fire(
            'Peringatan!',
            '{{ $message }}',
            'error'
        )
        @endif
        </script>
    </body>
</html>
