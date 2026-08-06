

// PLAYLIST
const playlist = [];
function addToPlaylist(name) {
    playlist.push(name);
    const li = document.createElement("li");
    li.textContent = name;
    document.getElementById("playlist").appendChild(li);
}

// PLAYLIST POPUP
function openPlaylist() {
    document.getElementById("playlistModal").style.display = "flex";
}
function closePlaylist() {
    document.getElementById("playlistModal").style.display = "none";
}

// OPEN POPUP (VIDEO + AUDIO)
function openPopup(btn) {
    const card = btn.closest('.product-card');

    const modal = document.getElementById("modal");
    const modalVideo = document.getElementById("modalVideo");
    const modalVideoSrc = document.getElementById("modalVideoSrc");
    const modalAudio = document.getElementById("modalAudio");

    // Album & Artist
    document.getElementById("modalAlbum").textContent = card.dataset.album;
    document.getElementById("modalArtist").textContent = card.dataset.artist;

    // Video selalu animasi.mp4
    modalVideoSrc.src = card.dataset.video;
    modalVideo.load();
    modalVideo.currentTime = 0;
    modalVideo.muted = true;
    modalVideo.removeAttribute('controls');

    // Audio sesuai card
    modalAudio.src = document.getElementById(card.dataset.song).src;

    // Sinkron audio → video
    modalAudio.onplay = () => modalVideo.play();
    modalAudio.onpause = () => modalVideo.pause();
    modalAudio.onseeked = () => modalVideo.currentTime = modalAudio.currentTime;
    modalAudio.onratechange = () => modalVideo.playbackRate = modalAudio.playbackRate;

    // Sinkron video → audio (PERMINTAANMU)
    modalVideo.onpause = () => modalAudio.pause();
    modalVideo.onplay  = () => modalAudio.play();

    modal.style.display = "flex";
    modalAudio.play();
}


// CLOSE POPUP
function closePopup() {
    const modal = document.getElementById("modal");
    const modalAudio = document.getElementById("modalAudio");
    const modalVideo = document.getElementById("modalVideo");

    modalAudio.pause();
    modalVideo.pause();

    modal.style.display = "none";
}
