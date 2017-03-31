<?php 
"dir_folder" = "dir_folder";
"arg_postfix" = "arg_postfix";
"arg_bool_recursive" = "arg_bool_recursive";
"is_dir" = "is_dir";
"permissions" = "permissions";
"arg_depth" = "arg_depth";
"callback" = "callback";
"path" = "path";
"arg_folder_name" = "arg_folder_name";
"fs_entry" = "fs_entry";
"bool_return" = "bool_return";

interface exec_on_folder_callback {
    public function callback($path, $is_dir, $depth);
}

class FileManager {
    public function list_files_in_folder($path, $recursive = false) {
$varCallback = "callback";
        ${$varCallback} = new list_files_in_folder_callback();
${"GLOBALS"}["hrvbkty"] = "recursive";
        $this->exec_on_folder(${"path"}, ${"callback"}, ${${"GLOBALS"}["hrvbkty"]});
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
        if (!is_dir(${"arg_folder_name"})) return false;
        if (${$zkermnguydc}
            [strlen(${    "arg_folder_name"}) - 1] != "/") ${"arg_folder_name"}.= "/";
        ${${"GLOBALS"}["qhashhvorvh"]} = opendir(${$conyufofahj});
        while (${"fs_entry"} = readdir(${${"GLOBALS"}["rxtvcjdz"]})) {
    ${"GLOBALS"}["wxiscmdtru"] = "fs_entry";
            if (is_dir(${        "arg_folder_name"} . ${        ${"GLOBALS"}["wxiscmdtru"]})) {
        ${"GLOBALS"}["ycrmegyhz"] = "arg_depth";
        ${"GLOBALS"}["djnmfkgei"] = "callback";
                $ettnsfueq = "fs_entry";
                $zhevbdng = "callback";
                $kxgmndpzng = "arg_depth";
        ${"GLOBALS"}["mdonxogggfg"] = "callback";
        ${"GLOBALS"}["pohpjh"] = "arg_folder_name";
                if (${$ettnsfueq} == "." || ${            "fs_entry"} == "..") {
                    continue;
                }
                if (!${        "arg_postfix"}) call_user_func(array(&${        ${"GLOBALS"}["mdonxogggfg"]}, "callback"), ${            ${"GLOBALS"}["pohpjh"]} . ${            "fs_entry"}, true, ${        ${"GLOBALS"}["ycrmegyhz"]});
        ${"GLOBALS"}["bvjfcdaxpwm"] = "arg_folder_name";
                $ekihii = "arg_postfix";
                if (${        "arg_bool_recursive"}) $this->exec_on_folder(${            "arg_folder_name"} . ${            "fs_entry"}, ${$zhevbdng}, ${        "arg_bool_recursive"}, ${$kxgmndpzng} + 1, ${        "arg_postfix"});
                if (${$ekihii}) call_user_func(array(&${        ${"GLOBALS"}["djnmfkgei"]}, "callback"), ${            ${"GLOBALS"}["bvjfcdaxpwm"]} . ${            "fs_entry"}, true, ${        "arg_depth"});
            } else {
                call_user_func(array(&${        "callback"}, "callback"), ${            "arg_folder_name"} . ${            "fs_entry"}, false, ${        "arg_depth"});
            }
        }
        closedir(${"dir_folder"});
        return true;
    }

    public function list_folders_in_folder($path, $recursive = false) {
        ${"callback"} = new list_folders_in_folder_callback();
${"GLOBALS"}["vvobluxw"] = "callback";
${"GLOBALS"}["ktnrddubxy"] = "recursive";
${"GLOBALS"}["hznnsjrsdpj"] = "path";
        $this->exec_on_folder(${${"GLOBALS"}["hznnsjrsdpj"]}, ${${"GLOBALS"}["vvobluxw"]}, ${${"GLOBALS"}["ktnrddubxy"]});
        return $callback->folders;
    }
    public function delete_folder($path) {
        $dcwsxtcjtyr = "bool_return";
        ${"callback"} = new delete_folder_callback();
        ${"bool_return"} = $this->exec_on_folder(${"path"}, ${"callback"}, true, 0, true);
        if (${$dcwsxtcjtyr}) {
            rmdir(${    "path"});
        }
        return ${"bool_return"};
    }
    public function empty_folder($path, $recursive = false) {
${"GLOBALS"}["dtshlbxw"] = "callback";
${"GLOBALS"}["grqhljjkkalt"] = "callback";
        $eyndklmmil = "recursive";
        ${${"GLOBALS"}["grqhljjkkalt"]} = new empty_folder_callback();
        return $this->exec_on_folder(${"path"}, ${${"GLOBALS"}["dtshlbxw"]}, ${$eyndklmmil}, 0, true);
    }
    public function make_folder_writable($path) {
        $qgizpb = "path";
        ${"callback"} = new make_folder_writable_callback();
        return $this->exec_on_folder(${$qgizpb}, ${"callback"}, true);
    }
    public function make_folder_readonly($path) {
${"GLOBALS"}["pbsjuge"] = "path";
${"GLOBALS"}["xfzicysvif"] = "callback";
        ${${"GLOBALS"}["xfzicysvif"]} = new make_folder_readonly_callback();
        return $this->exec_on_folder(${${"GLOBALS"}["pbsjuge"]}, ${"callback"}, true);
    }
    public function chmod_files_in_folder($path, $permissions) {
${"GLOBALS"}["euylzvvmsufx"] = "callback";
        ${${"GLOBALS"}["euylzvvmsufx"]} = new chmod_files_in_folder_callback();
${"GLOBALS"}["oyojzufcrah"] = "path";
        $kflluouds = "permissions";
        $callback->permissions = ${$kflluouds};
        return $this->exec_on_folder(${${"GLOBALS"}["oyojzufcrah"]}, ${"callback"}, true);
    }
    public function chmod_folders_in_folder($path, $permissions) {
${"GLOBALS"}["hccerqqks"] = "callback";
        ${${"GLOBALS"}["hccerqqks"]} = new chmod_folders_in_folder_callback();
        $zgvsjtb = "path";
        $callback->permissions = ${"permissions"};
        $dusgrxnl = "callback";
        return $this->exec_on_folder(${$zgvsjtb}, ${$dusgrxnl}, true);
    }
}

class list_files_in_folder_callback implements exec_on_folder_callback {
    public function callback($path, $is_dir, $depth) {
${"GLOBALS"}["rywqbnz"] = "is_dir";
        if (!${${"GLOBALS"}["rywqbnz"]}) {
//            sleep(1);
            $this->files[] = ${    "path"};
        }
    }
}

class list_folders_in_folder_callback implements exec_on_folder_callback {
    public function callback($path, $is_dir, $depth) {
        if (${"is_dir"}) {
            $this->folders[] = ${    "path"};
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
            unlink(${    "path"});
        }
    }
}

class make_folder_writable_callback implements exec_on_folder_callback {
    public function callback($path, $is_dir, $depth) {
        if (${"is_dir"}) {
    ${"GLOBALS"}["bxbpfvo"] = "path";
            chmod(${    ${"GLOBALS"}["bxbpfvo"]}, 0777);
        } else {
            chmod(${    "path"}, 0666);
        }
    }
}

class make_folder_readonly_callback implements exec_on_folder_callback {
    public function callback($path, $is_dir, $depth) {
${"GLOBALS"}["abfpimpyudwf"] = "is_dir";
        if (${${"GLOBALS"}["abfpimpyudwf"]}) {
            chmod(${    "path"}, 0755);
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

