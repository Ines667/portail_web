function encodeBase64(){
        var fichier_cv = document.getElementById("upload_file_cv").files[0];
        var reader_cv = new FileReader();
    
        reader_cv.onload = function() {
            var base64_cv = reader_cv.result;
            console.log(base64_cv);
        };
        reader_cv.readAsDataURL(fichier_cv);
    
        var fichier_cni = document.getElementById("upload_file_cni").files[0];
        var reader_cni = new FileReader();
    
        reader_cni.onload = function() {
            var base64_cni = reader_cni.result;
            console.log(base64_cni);
        };
        reader_cni.readAsDataURL(fichier_cni);
    
        var fichier_passport = document.getElementById("upload_file_passport").files[0];
        var reader_passport = new FileReader();
    
        reader_passport.onload = function() {
            var base64_passport = reader_passport.result;
            console.log(base64_passport);
        };
        reader_passport.readAsDataURL(fichier_passport);
    
        var fichier_titre_de_sejour = document.getElementById("upload_file_titre_de_sejour").files[0];
        var reader_titre_de_sejour = new FileReader();
    
        reader_titre_de_sejour.onload = function() {
            var base64_titre_de_sejour = reader_titre_de_sejour.result;
            console.log(base64_titre_de_sejour);
        };
        reader_titre_de_sejour.readAsDataURL(fichier_titre_de_sejour);
    
        var fichier_autorisation_de_travail = document.getElementById("upload_file_autorisation_de_travail").files[0];
        var reader_autorisation_de_travail = new FileReader();
    
        reader_autorisation_de_travail.onload = function() {
            var base64_autorisation_de_travail = reader_autorisation_de_travail.result;
            console.log(base64_autorisation_de_travail);
        };
        reader_autorisation_de_travail.readAsDataURL(fichier_autorisation_de_travail);
    
        var fichier_vitale = document.getElementById("upload_file_vitale").files[0];
        var reader_vitale = new FileReader();
    
        reader_vitale.onload = function() {
            var base64_vitale = reader_vitale.result;
            console.log(base64_vitale);
        };
        reader_vitale.readAsDataURL(fichier_vitale);
    
        var fichier_rib = document.getElementById("upload_file_rib").files[0];
        var reader_rib = new FileReader();
    
        reader_rib.onload = function() {
            var base64_rib = reader_rib.result;
            console.log(base64_rib);
        };
        reader_rib.readAsDataURL(fichier_rib);
    
        var fichier_carte_grise = document.getElementById("upload_file_carte_grise").files[0];
        var reader_carte_grise = new FileReader();
    
        reader_carte_grise.onload = function() {
            var base64_carte_grise = reader_carte_grise.result;
            console.log(base64_carte_grise);
        };
        reader_carte_grise.readAsDataURL(fichier_carte_grise);
    
        var fichier_veh_assu = document.getElementById("upload_file_veh_assu").files[0];
        var reader_veh_assu = new FileReader();
    
        reader_veh_assu.onload = function() {
            var base64_veh_assu = reader_veh_assu.result;
            console.log(base64_veh_assu);
        };
        reader_veh_assu.readAsDataURL(fichier_veh_assu);
    
        var fichier_permis = document.getElementById("upload_file_permis").files[0];
        var reader_fichier_permis = new FileReader();
    
        reader_fichier_permis.onload = function() {
            var base64_fichier_permis = reader_fichier_permis.result;
            console.log(base64_fichier_permis);
        };
        
        reader_fichier_permis.readAsDataURL(fichier_permis);
    
        var fichier_justif_domi = document.getElementById("upload_file_justif_domi").files[0];
        var reader_fichier_justif_domi = new FileReader();
    
        reader_fichier_justif_domi.onload = function() {
            var base64_justif_domi = reader_fichier_justif_domi.result;
            console.log(base64_justif_domi);
        };
        reader_fichier_justif_domi.readAsDataURL(fichier_justif_domi);


    }  
