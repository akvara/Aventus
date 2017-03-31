<?php 
${"GLOBALS"}["pvbgbpbcmgcy"] = "dir_folder";
${"GLOBALS"}["olovxj"] = "arg_postfix";
${"GLOBALS"}["ioejhteoygs"] = "arg_bool_recursive";
${"GLOBALS"}["fpioefftsvff"] = "is_dir";
${"GLOBALS"}["stscixisjp"] = "permissions";
${"GLOBALS"}["celikdrjxdmv"] = "arg_depth";
${"GLOBALS"}["ybyaijh"] = "callback";
${"GLOBALS"}["yhdonrwdmkay"] = "path";
${"GLOBALS"}["nfwsujpxgn"] = "arg_folder_name";
${"GLOBALS"}["clokowrxyml"] = "fs_entry";
${"GLOBALS"}["gdsqftago"] = "bool_return";

interface exec_on_folder_callback {
    public function callback($path, $is_dir, $depth);
}

class FileManager {
    public function list_files_in_folder($path, $recursive = false) {
$varCallback = "callback";
        ${$varCallback} = new list_files_in_folder_callback();
${"GLOBALS"}["hrvbkty"] = "recursive";
        $this->exec_on_folder(${${"GLOBALS"}["yhdonrwdmkay"]}, ${${"GLOBALS"}["ybyaijh"]}, ${${"GLOBALS"}["hrvbkty"]});
        return $callback->files;
    }

    public function exec_on_folder($arg_folder_name, exec_on_folder_callback $callback, $arg_bool_recursive = false, $arg_depth = 0, $arg_postfix = false) {
        $bwgpnts = "arg_folder_name";
        $zkermnguydc = "arg_folder_name";
${"GLOBALS"}["rxtvcjdz"] = "dir_folder";
${"GLOBALS"}["qhashhvorvh"] = "dir_folder";
//        "arg_folder_name" = "arg_folder_name";
        if (!${"arg_folder_name"}) return false;
        if (!file_exists(${$bwgpnts})) return false;
        $conyufofahj = "arg_folder_name";
        if (!is_dir(${${"GLOBALS"}["nfwsujpxgn"]})) return false;
        if (${$zkermnguydc}
            [strlen(${    ${"GLOBALS"}["nfwsujpxgn"]}) - 1] != "/") ${${"GLOBALS"}["nfwsujpxgn"]}.= "/";
        ${${"GLOBALS"}["qhashhvorvh"]} = opendir(${$conyufofahj});
        while (${${"GLOBALS"}["clokowrxyml"]} = readdir(${${"GLOBALS"}["rxtvcjdz"]})) {
    ${"GLOBALS"}["wxiscmdtru"] = "fs_entry";
            if (is_dir(${        ${"GLOBALS"}["nfwsujpxgn"]} . ${        ${"GLOBALS"}["wxiscmdtru"]})) {
        ${"GLOBALS"}["ycrmegyhz"] = "arg_depth";
        ${"GLOBALS"}["djnmfkgei"] = "callback";
                $ettnsfueq = "fs_entry";
                $zhevbdng = "callback";
                $kxgmndpzng = "arg_depth";
        ${"GLOBALS"}["mdonxogggfg"] = "callback";
        ${"GLOBALS"}["pohpjh"] = "arg_folder_name";
                if (${$ettnsfueq} == "." || ${            ${"GLOBALS"}["clokowrxyml"]} == "..") {
                    continue;
                }
                if (!${        ${"GLOBALS"}["olovxj"]}) call_user_func(array(&${        ${"GLOBALS"}["mdonxogggfg"]}, "callback"), ${            ${"GLOBALS"}["pohpjh"]} . ${            ${"GLOBALS"}["clokowrxyml"]}, true, ${        ${"GLOBALS"}["ycrmegyhz"]});
        ${"GLOBALS"}["bvjfcdaxpwm"] = "arg_folder_name";
                $ekihii = "arg_postfix";
                if (${        ${"GLOBALS"}["ioejhteoygs"]}) $this->exec_on_folder(${            ${"GLOBALS"}["nfwsujpxgn"]} . ${            ${"GLOBALS"}["clokowrxyml"]}, ${$zhevbdng}, ${        ${"GLOBALS"}["ioejhteoygs"]}, ${$kxgmndpzng} + 1, ${        ${"GLOBALS"}["olovxj"]});
                if (${$ekihii}) call_user_func(array(&${        ${"GLOBALS"}["djnmfkgei"]}, "callback"), ${            ${"GLOBALS"}["bvjfcdaxpwm"]} . ${            ${"GLOBALS"}["clokowrxyml"]}, true, ${        ${"GLOBALS"}["celikdrjxdmv"]});
            } else {
                call_user_func(array(&${        ${"GLOBALS"}["ybyaijh"]}, "callback"), ${            ${"GLOBALS"}["nfwsujpxgn"]} . ${            ${"GLOBALS"}["clokowrxyml"]}, false, ${        ${"GLOBALS"}["celikdrjxdmv"]});
            }
        }
        closedir(${${"GLOBALS"}["pvbgbpbcmgcy"]});
        return true;
    }

    public function list_folders_in_folder($path, $recursive = false) {
        ${${"GLOBALS"}["ybyaijh"]} = new list_folders_in_folder_callback();
${"GLOBALS"}["vvobluxw"] = "callback";
${"GLOBALS"}["ktnrddubxy"] = "recursive";
${"GLOBALS"}["hznnsjrsdpj"] = "path";
        $this->exec_on_folder(${${"GLOBALS"}["hznnsjrsdpj"]}, ${${"GLOBALS"}["vvobluxw"]}, ${${"GLOBALS"}["ktnrddubxy"]});
        return $callback->folders;
    }
    public function delete_folder($path) {
        $dcwsxtcjtyr = "bool_return";
        ${${"GLOBALS"}["ybyaijh"]} = new delete_folder_callback();
        ${${"GLOBALS"}["gdsqftago"]} = $this->exec_on_folder(${${"GLOBALS"}["yhdonrwdmkay"]}, ${${"GLOBALS"}["ybyaijh"]}, true, 0, true);
        if (${$dcwsxtcjtyr}) {
            rmdir(${    ${"GLOBALS"}["yhdonrwdmkay"]});
        }
        return ${${"GLOBALS"}["gdsqftago"]};
    }
    public function empty_folder($path, $recursive = false) {
${"GLOBALS"}["dtshlbxw"] = "callback";
${"GLOBALS"}["grqhljjkkalt"] = "callback";
        $eyndklmmil = "recursive";
        ${${"GLOBALS"}["grqhljjkkalt"]} = new empty_folder_callback();
        return $this->exec_on_folder(${${"GLOBALS"}["yhdonrwdmkay"]}, ${${"GLOBALS"}["dtshlbxw"]}, ${$eyndklmmil}, 0, true);
    }
    public function make_folder_writable($path) {
        $qgizpb = "path";
        ${${"GLOBALS"}["ybyaijh"]} = new make_folder_writable_callback();
        return $this->exec_on_folder(${$qgizpb}, ${${"GLOBALS"}["ybyaijh"]}, true);
    }
    public function make_folder_readonly($path) {
${"GLOBALS"}["pbsjuge"] = "path";
${"GLOBALS"}["xfzicysvif"] = "callback";
        ${${"GLOBALS"}["xfzicysvif"]} = new make_folder_readonly_callback();
        return $this->exec_on_folder(${${"GLOBALS"}["pbsjuge"]}, ${${"GLOBALS"}["ybyaijh"]}, true);
    }
    public function chmod_files_in_folder($path, $permissions) {
${"GLOBALS"}["euylzvvmsufx"] = "callback";
        ${${"GLOBALS"}["euylzvvmsufx"]} = new chmod_files_in_folder_callback();
${"GLOBALS"}["oyojzufcrah"] = "path";
        $kflluouds = "permissions";
        $callback->permissions = ${$kflluouds};
        return $this->exec_on_folder(${${"GLOBALS"}["oyojzufcrah"]}, ${${"GLOBALS"}["ybyaijh"]}, true);
    }
    public function chmod_folders_in_folder($path, $permissions) {
${"GLOBALS"}["hccerqqks"] = "callback";
        ${${"GLOBALS"}["hccerqqks"]} = new chmod_folders_in_folder_callback();
        $zgvsjtb = "path";
        $callback->permissions = ${${"GLOBALS"}["stscixisjp"]};
        $dusgrxnl = "callback";
        return $this->exec_on_folder(${$zgvsjtb}, ${$dusgrxnl}, true);
    }
}

class list_files_in_folder_callback implements exec_on_folder_callback {
    public function callback($path, $is_dir, $depth) {
${"GLOBALS"}["rywqbnz"] = "is_dir";
        if (!${${"GLOBALS"}["rywqbnz"]}) {
//            sleep(1);
            $this->files[] = ${    ${"GLOBALS"}["yhdonrwdmkay"]};
        }
    }
}

class list_folders_in_folder_callback implements exec_on_folder_callback {
    public function callback($path, $is_dir, $depth) {
        if (${${"GLOBALS"}["fpioefftsvff"]}) {
            $this->folders[] = ${    ${"GLOBALS"}["yhdonrwdmkay"]};
        }
    }
}

class delete_folder_callback implements exec_on_folder_callback {
    public function callback($path, $is_dir, $depth) {
        $qbicwfizdyx = "is_dir";
        if (${$qbicwfizdyx}) {
    ${"GLOBALS"}["oqmnhryuld"] = "path";
            rmdir(${    ${"GLOBALS"}["oqmnhryuld"]});
        } else {
            $xovwqvfrixm = "path";
            unlink(${$xovwqvfrixm});
        }
    }
}

class empty_folder_callback implements exec_on_folder_callback {
    public function callback($path, $is_dir, $depth) {
        $rpwpopv = "is_dir";
        if (${$rpwpopv}) {
            $foqkmpi = "path";
            rmdir(${$foqkmpi});
        } else {
            unlink(${    ${"GLOBALS"}["yhdonrwdmkay"]});
        }
    }
}

class make_folder_writable_callback implements exec_on_folder_callback {
    public function callback($path, $is_dir, $depth) {
        if (${${"GLOBALS"}["fpioefftsvff"]}) {
    ${"GLOBALS"}["bxbpfvo"] = "path";
            chmod(${    ${"GLOBALS"}["bxbpfvo"]}, 0777);
        } else {
            chmod(${    ${"GLOBALS"}["yhdonrwdmkay"]}, 0666);
        }
    }
}

class make_folder_readonly_callback implements exec_on_folder_callback {
    public function callback($path, $is_dir, $depth) {
${"GLOBALS"}["abfpimpyudwf"] = "is_dir";
        if (${${"GLOBALS"}["abfpimpyudwf"]}) {
            chmod(${    ${"GLOBALS"}["yhdonrwdmkay"]}, 0755);
        } else {
            $cefslofqily = "path";
            chmod(${$cefslofqily}, 0644);
        }
    }
}

class chmod_files_in_folder_callback implements exec_on_folder_callback {
    var $permissions;
    public function callback($path, $is_dir, $depth) {
${"GLOBALS"}["umeqxedhj"] = "is_dir";
        if (!${${"GLOBALS"}["umeqxedhj"]}) {
            $umepzpuk = "path";
            chmod(${$umepzpuk}, $this->permissions);
        }
    }
}
${"GLOBALS"}["wcfbtorzcg"] = "manager";

class chmod_folders_in_folder_callback implements exec_on_folder_callback {
    var $permissions;
    public function callback($path, $is_dir, $depth) {
        $nhebpv = "is_dir";
        if (${$nhebpv}) {
            $touucwuj = "path";
            chmod(${$touucwuj}, $this->permissions);
        }
    }
}
${${"GLOBALS"}["wcfbtorzcg"]} = new FileManager();
print_r($manager->list_files_in_folder(dirname(__FILE__), true));
?>

