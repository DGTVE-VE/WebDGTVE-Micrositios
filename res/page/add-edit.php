<?php
/*
 * DO NOT ALTER OR REMOVE COPYRIGHT NOTICES OR THIS HEADER.
 *
 * Copyright 2011 Oracle and/or its affiliates. All rights reserved.
 *
 * Oracle and Java are registered trademarks of Oracle and/or its affiliates.
 * Other names may be trademarks of their respective owners.
 *
 * The contents of this file are subject to the terms of either the GNU
 * General Public License Version 2 only ("GPL") or the Common
 * Development and Distribution License("CDDL") (collectively, the
 * "License"). You may not use this file except in compliance with the
 * License. You can obtain a copy of the License at
 * http://www.netbeans.org/cddl-gplv2.html
 * or nbbuild/licenses/CDDL-GPL-2-CP. See the License for the
 * specific language governing permissions and limitations under the
 * License.  When distributing the software, include this License Header
 * Notice in each file and include the License file at
 * nbbuild/licenses/CDDL-GPL-2-CP.  Oracle designates this
 * particular file as subject to the "Classpath" exception as provided
 * by Oracle in the GPL Version 2 section of the License file that
 * accompanied this code. If applicable, add the following below the
 * License Header, with the fields enclosed by brackets [] replaced by
 * your own identifying information:
 * "Portions Copyrighted [year] [name of copyright owner]"
 *
 * If you wish your version of this file to be governed by only the CDDL
 * or only the GPL Version 2, indicate your decision by adding
 * "[Contributor] elects to include this software in this distribution
 * under the [CDDL or GPL Version 2] license." If you do not indicate a
 * single choice of license, a recipient has the option to distribute
 * your version of this file under either the CDDL, the GPL Version 2 or
 * to extend the choice of license to its licensees as provided above.
 * However, if you add GPL Version 2 code and therefore, elected the GPL
 * Version 2 license, then the option applies only if the new code is
 * made subject to such option by the copyright holder.
 *
 * Contributor(s):
 *
 * Portions Copyrighted 2011 Sun Microsystems, Inc.
 */

$errors = array();
$todo = null;
$edit = array_key_exists('id', $_GET);
if ($edit) {
    $todo = Utils::getTodoByGetId();
} else {
    // set defaults
    $todo = new Todo();        
}

if (array_key_exists('cancel', $_POST)) {
    // redirect
    Utils::redirect('home');    
} elseif (array_key_exists('save', $_POST)) {
    // for security reasons, do not map the whole $_POST['todo']
    if(!isset($_POST['todo']['genero'])){$_POST['todo']['genero'] = '';}
    if(!isset($_POST['preg1'])){$_POST['preg1'] = '';}
    if(!isset($_POST['preg2'])){$_POST['preg2'] = '';}
    if(!isset($_POST['preg3'])){$_POST['preg3'] = '';}
    if(!isset($_POST['preg4'])){$_POST['preg4'] = '';}
    if(!isset($_POST['preg5'])){$_POST['preg5'] = '';}
    if(!isset($_POST['preg6'])){$_POST['preg6'] = '';}
    if(!isset($_POST['preg7'])){$_POST['preg7'] = '';}
    if(!isset($_POST['preg8'])){$_POST['preg8'] = '';}
    if(!isset($_POST['preg9'])){$_POST['preg9'] = '';}
    if(!isset($_POST['preg10'])){$_POST['preg10'] = '';}
    if(!isset($_POST['preg11'])){$_POST['preg11'] = '';}
    if(!isset($_POST['preg12'])){$_POST['preg12'] = '';}
    if(!isset($_POST['preg13'])){$_POST['preg13'] = '';}
    if(!isset($_POST['preg14'])){$_POST['preg14'] = '';}
    if(!isset($_POST['preg15'])){$_POST['preg15'] = '';}
    if(!isset($_POST['preg16'])){$_POST['preg16'] = '';}
    if(!isset($_POST['preg17'])){$_POST['preg17'] = '';}
    if(!isset($_POST['preg18'])){$_POST['preg18'] = '';}
    if(!isset($_POST['preg19'])){$_POST['preg19'] = '';}
    if(!isset($_POST['preg20'])){$_POST['preg20'] = '';}
    if(!isset($_POST['preg21'])){$_POST['preg21'] = '';}
    if(!isset($_POST['preg22'])){$_POST['preg22'] = '';}
    if(!isset($_POST['preg23'])){$_POST['preg23'] = '';}
    if(!isset($_POST['preg24'])){$_POST['preg24'] = '';}
    if(!isset($_POST['preg25'])){$_POST['preg25'] = '';}
    if(!isset($_POST['preg26'])){$_POST['preg26'] = '';}
    if(!isset($_POST['preg27'])){$_POST['preg27'] = '';}
    if(!isset($_POST['preg28'])){$_POST['preg28'] = '';}
    if(!isset($_POST['preg29'])){$_POST['preg29'] = '';}
    if(!isset($_POST['preg30'])){$_POST['preg30'] = '';}
    if(!isset($_POST['preg31'])){$_POST['preg31'] = '';}
    if(!isset($_POST['preg32'])){$_POST['preg32'] = '';}
    if(!isset($_POST['preg33'])){$_POST['preg33'] = '';}
    $data = array(
        'nombre' => $_POST['todo']['nombre'],
        'genero' => $_POST['todo']['genero'],
        'edad' => $_POST['todo']['edad'],
        'region' => $_POST['todo']['region'],
        'nacionalidad' => $_POST['todo']['nacionalidad'],
        'residencia' => $_POST['todo']['residencia'],
        'profesion' => $_POST['todo']['profesion'],
        'email' => $_POST['todo']['email'],
        'edoCivil' => $_POST['todo']['edoCivil'],
        'numHijos' => $_POST['todo']['numHijos'],
        'comment' => $_POST['todo']['comment'],
        'preg1' => $_POST['preg1'],
        'preg2' => $_POST['preg2'],
        'preg3' => $_POST['preg3'],
        'preg4' => $_POST['preg4'],
        'preg5' => $_POST['preg5'],
        'preg6' => $_POST['preg6'],
        'preg7' => $_POST['preg7'],
        'preg8' => $_POST['preg8'],
        'preg9' => $_POST['preg9'],
        'preg10' => $_POST['preg10'],
        'preg11' => $_POST['preg11'],
        'preg12' => $_POST['preg12'],
        'preg13' => $_POST['preg13'],
        'preg14' => $_POST['preg14'],
        'preg15' => $_POST['preg15'],
        'preg16' => $_POST['preg16'],
        'preg17' => $_POST['preg17'],
        'preg18' => $_POST['preg18'],
        'preg19' => $_POST['preg19'],
        'preg20' => $_POST['preg20'],
        'preg21' => $_POST['preg21'],
        'preg22' => $_POST['preg22'],
        'preg23' => $_POST['preg23'],
        'preg24' => $_POST['preg24'],
        'preg25' => $_POST['preg25'],
        'preg26' => $_POST['preg26'],
        'preg27' => $_POST['preg27'],
        'preg28' => $_POST['preg28'],
        'preg29' => $_POST['preg29'],
        'preg30' => $_POST['preg30'],
        'preg31' => $_POST['preg31'],
        'preg32' => $_POST['preg32'],
        'preg33' => $_POST['preg33'],               
    );
        ;
    
    // map
    TodoMapper::map($todo, $data);
    // validate
    $errors = TodoValidator::validate($todo, $data);
    // validate
    if (empty($errors)) {
        // save
        $dao = new TodoDao();
        $todo = $dao->save($todo);
        Flash::addFlash('El Test se realizó satisfactoriamente.');
        // redirect
        Utils::redirect('detail', array('id' => $todo->getId()));
    }
}
