<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1 class="mt-2"><?= $ujian['nama_ujian'] ?></h1><br>
    <h2 class="mt-2">Sisa Waktu: <span id="countdown"></span></h2><br>
    <form action="/ujian/hasil_ujian/<?= $id ?>" method="post" id="ujianForm">
        <?= csrf_field() ?>
        <?php foreach ($soal as $k) :
            $jawaban_dipilih = null;
            foreach ($jawaban as $jawaban) {
                if ($jawaban['id_soal'] === $k['id']) {
                    $jawaban_dipilih = $jawaban['jawaban_dipilih'];
                    break;
                }
            }
        ?>
            <div class="row">
                <div class="col-1">
                    <div style="display: flex; justify-content: center;">
                        <h1><?= $currentPage; ?></h1>
                    </div>
                </div>
                <div class="col-8">
                    <?= $k['soal'] ?><br>
                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                        <div>
                            <label class="btn btn-outline-primary <?php if ($jawaban_dipilih === 'jawaban_a') echo 'active'; ?>">
                                <input type="radio" class="btn-check" name="jawaban[<?= $k['id'] ?>][]" value="jawaban_a" <?php if ($jawaban_dipilih === 'jawaban_a') echo 'checked'; ?>> A
                            </label>
                            <label class="form-check-label ml-2" for="checkbox_bab_<?= $k['id'] ?>"><?= $k['jawaban_a'] ?></label>
                        </div>
                        <div>
                            <label class="btn btn-outline-primary <?php if ($jawaban_dipilih === 'jawaban_b') echo 'active'; ?>">
                                <input type="radio" class="btn-check" name="jawaban[<?= $k['id'] ?>][]" value="jawaban_b" <?php if ($jawaban_dipilih === 'jawaban_b') echo 'checked'; ?>> B
                            </label>
                            <label class="form-check-label ml-2" for="checkbox_bab_<?= $k['id'] ?>"><?= $k['jawaban_b'] ?></label>
                        </div>
                        <div>
                            <label class="btn btn-outline-primary <?php if ($jawaban_dipilih === 'jawaban_c') echo 'active'; ?>">
                                <input type="radio" class="btn-check" name="jawaban[<?= $k['id'] ?>][]" value="jawaban_c" <?php if ($jawaban_dipilih === 'jawaban_c') echo 'checked'; ?>> C
                            </label>
                            <label class="form-check-label ml-2" for="checkbox_bab_<?= $k['id'] ?>"><?= $k['jawaban_c'] ?></label>
                        </div>
                        <div>
                            <label class="btn btn-outline-primary <?php if ($jawaban_dipilih === 'jawaban_d') echo 'active'; ?>">
                                <input type="radio" class="btn-check" name="jawaban[<?= $k['id'] ?>][]" value="jawaban_d" <?php if ($jawaban_dipilih === 'jawaban_d') echo 'checked'; ?>> D
                            </label>
                            <label class="form-check-label ml-2" for="checkbox_bab_<?= $k['id'] ?>"><?= $k['jawaban_d'] ?></label>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <div class="col">
                    <?= $pager->links('soal', 'ujian_pagination'); ?>
                    <input type="hidden" name="timer" id="timerInput">
                </div>
            </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('input[name="jawaban[' + <?= $k['id'] ?> + '][]"]').click(function(event) {
            event.preventDefault(); // Prevent the default form submission
            var idKodeUsers = <?= $id ?>;
            var idSoal = <?= $k['id'] ?>;
            var jawabanDipilih = this.value;
            $.ajax({
                url: '/ujian/simpan_jawaban_dipilih',
                type: 'POST',
                data: {
                    id_kode_users: idKodeUsers,
                    id_soal: idSoal,
                    jawaban_dipilih: jawabanDipilih
                },
                success: function(response) {
                    console.log('Answer submitted successfully');
                },
                error: function(xhr, status, error) {
                    console.error('Error submitting answer:', error);
                }
            });
        });
    });

    // Set the countdown duration in minutes
var countdownDuration = <?= $ujian['durasi_ujian'] ?>;

// Get the countdown element
var countdownElement = document.getElementById('countdown');

// Start the countdown immediately
startCountdown();

function startCountdown() {
    
    var remainingTime = <?= $remainingTime ?>;

    // Calculate the total countdown time in milliseconds
    var totalTime = countdownDuration * 60 * 1000;

    // If the remaining time is not set or has expired, calculate and set it
    if (!remainingTime || remainingTime < 0) {
        remainingTime = totalTime;
        $.ajax({
                    url: '/ujian/save_remaining_duration',
                    method: 'POST',
                    data: {
                        idKodeUsers: <?= $id ?>, 
                        remainingDuration: remainingTime
                    },
                    success: function(response) {
                        console.log('Remaining duration saved or updated in the database.');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error saving or updating remaining duration:', error);
                    }
                });
    }

    // Calculate the countdown end time based on the remaining time
    var endTime = Date.now() + remainingTime;

    // Update the countdown immediately
    updateCountdown();

    // Start the countdown interval
    var countdown = setInterval(updateCountdown, 1000);

    // Function to update the countdown
    function updateCountdown() {
        // Calculate the remaining time
        remainingTime = endTime - Date.now();
        // Check if the countdown has reached 0
        if (remainingTime < 0) {
            // Stop the countdown
            clearInterval(countdown);

            // Auto-submit the form
            document.getElementById('ujianForm').submit();
            return;
        }
        var hours = Math.floor(remainingTime / (60 * 60 * 1000));
        var minutes = Math.floor(remainingTime / (60 * 1000));
        var seconds = Math.floor((remainingTime % (60 * 1000)) / 1000);

        // Format the time with leading zeros
        var formattedTime = ('0' + hours).slice(-2) + ':' + ('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2);

        // Display the countdown timer
        countdownElement.textContent = formattedTime;

        window.onbeforeunload = function() {
            $.ajax({
                    url: '/ujian/save_remaining_duration',
                    method: 'POST',
                    data: {
                        idKodeUsers: <?= $id ?>, 
                        remainingDuration: remainingTime
                    },
                    success: function(response) {
                        console.log('Remaining duration saved or updated in the database.');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error saving or updating remaining duration:', error);
                    }
                });
        };
    }
}
</script>
<?= $this->endSection(); ?>