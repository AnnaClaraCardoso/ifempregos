const photo = document.getElementById('imgPhoto');
const file = document.getElementById('flImage');
const smallProfilePicture = document.querySelector('.profile-picture');

photo.addEventListener('click', () => {
  file.click();
});

file.addEventListener('change', () => {
  if (file.files.length <= 0) {
    return;
  }
      
  let reader = new FileReader();

  reader.onload = () => {
    photo.src = reader.result;
    smallProfilePicture.src = reader.result;
  }

  reader.readAsDataURL(file.files[0]);
});