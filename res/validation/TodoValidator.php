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

/**
 * Validator for {@link Todo}.
 * @see TodoMapper
 */
final class TodoValidator {

    private function __construct() {
    }

    /**
     * Validate the given {@link Todo} instance.
     * @param Todo $todo {@link Todo} instance to be validated
     * @return array array of {@link Error} s
     */
    public static function validate(Todo $todo, array $properties) {
        $errors = array();
        if (!$todo->getCreatedOn()) {
            $errors[] = new Error('createdOn', 'Empty or invalid Created On.');
        }        
        if (!trim($todo->getNombre())) {
            $errors[] = new Error('nombre', 'El nombre no puede estar vacío.');
        }                
        if (!trim($todo->getGenero())) {
            $errors[] = new Error('genero', 'Tiene que seleccionar su género.');
        }
        if (!trim($todo->getEdad())) {
            $errors[] = new Error('edad', 'La edad no puede estar vacía.');
        }
        $opciones_edad = array(
            'options' => array(
                //Definimos el rango de edad entre 3 a 130.
                'min_range' => 3,
                'max_range' => 130
            )
        );
        if (filter_var($todo->getEdad(), FILTER_VALIDATE_INT, $opciones_edad) === FALSE) {
            $errors[] = new Error('edad', 'La edad es incorrecta.');
        }
        if (!trim($todo->getRegion())) {
            $errors[] = new Error('region', 'La región no puede estar vacía.');
        }
        if (!trim($todo->getNacionalidad())) {
            $errors[] = new Error('nacionalidad', 'La nacionalidad no puede estar vacía.');
        }
        if (!trim($todo->getResidencia())) {
            $errors[] = new Error('residencia', 'La residencia no puede estar vacía.');
        }
        if (!trim($todo->getProfesion())) {
            $errors[] = new Error('profesion', 'La profesión no puede estar vacía.');
        }
        if (!trim($todo->getEmail())) {
            $errors[] = new Error('email', 'El Email no puede estar vacío.');
        }
        if (filter_var($todo->getEmail(), FILTER_VALIDATE_EMAIL) === FALSE) {
            $errors[] = new Error('email', 'El Email es incorrecto.');
        }
        if (!trim($todo->getGenero())) {$errors[] = new Error('genero', 'Tiene que seleccionar una opción en la Pregunta .');
        }
        if (!trim($todo->getEdoCivil())) {
            $errors[] = new Error('edoCivil', 'El Estado Civil no puede estar vacío.');
        }
        if (!trim($todo->getNumHijos())) {
            $errors[] = new Error('numHijos', 'El Número de Hijos no puede estar vacío.');
        }
        if (!trim($properties['preg1'])) {
            $errors[] = new Error('preg1', 'No puede estar vacía la pregunta 1.');
        }
        if (!trim($properties['preg2'])) {
            $errors[] = new Error('preg2', 'No puede estar vacía la pregunta 2.');
        }
        if (!trim($properties['preg3'])) {
            $errors[] = new Error('preg3', 'No puede estar vacía la pregunta 3.');
        }
        if (!trim($properties['preg4'])) {
            $errors[] = new Error('preg4', 'No puede estar vacía la pregunta 4.');
        }
        if (!trim($properties['preg5'])) {
            $errors[] = new Error('preg5', 'No puede estar vacía la pregunta 5.');
        }
        if (!trim($properties['preg6'])) {
            $errors[] = new Error('preg6', 'No puede estar vacía la pregunta 6.');
        }
        if (!trim($properties['preg7'])) {
            $errors[] = new Error('preg7', 'No puede estar vacía la pregunta 7.');
        }
        if (!trim($properties['preg8'])) {
            $errors[] = new Error('preg8', 'No puede estar vacía la pregunta 8.');
        }
        if (!trim($properties['preg9'])) {
            $errors[] = new Error('preg9', 'No puede estar vacía la pregunta 9.');
        }
        if (!trim($properties['preg10'])) {
            $errors[] = new Error('preg10', 'No puede estar vacía la pregunta 10.');
        }
        if (!trim($properties['preg11'])) {
            $errors[] = new Error('preg11', 'No puede estar vacía la pregunta 11.');
        }
        if (!trim($properties['preg12'])) {
            $errors[] = new Error('preg12', 'No puede estar vacía la pregunta 12.');
        }
        if (!trim($properties['preg13'])) {
            $errors[] = new Error('preg13', 'No puede estar vacía la pregunta 13.');
        }
        if (!trim($properties['preg14'])) {
            $errors[] = new Error('preg14', 'No puede estar vacía la pregunta 14.');
        }
        if (!trim($properties['preg15'])) {
            $errors[] = new Error('preg15', 'No puede estar vacía la pregunta 15.');
        }
        if (!trim($properties['preg16'])) {
            $errors[] = new Error('preg16', 'No puede estar vacía la pregunta 16.');
        }
        if (!trim($properties['preg17'])) {
            $errors[] = new Error('preg17', 'No puede estar vacía la pregunta 17.');
        }        
        if (!trim($properties['preg18'])) {
            $errors[] = new Error('preg18', 'No puede estar vacía la pregunta 18.');
        }
        if (!trim($properties['preg19'])) {
            $errors[] = new Error('preg19', 'No puede estar vacía la pregunta 19.');
        }
        if (!trim($properties['preg20'])) {
            $errors[] = new Error('preg20', 'No puede estar vacía la pregunta 20.');
        }
        if (!trim($properties['preg21'])) {
            $errors[] = new Error('preg21', 'No puede estar vacía la pregunta 21.');
        }
        if (!trim($properties['preg22'])) {
            $errors[] = new Error('preg22', 'No puede estar vacía la pregunta 22.');
        }
        if (!trim($properties['preg23'])) {
            $errors[] = new Error('preg23', 'No puede estar vacía la pregunta 23.');
        }
        if (!trim($properties['preg24'])) {
            $errors[] = new Error('preg24', 'No puede estar vacía la pregunta 24.');
        }
        if (!trim($properties['preg25'])) {
            $errors[] = new Error('preg25', 'No puede estar vacía la pregunta 25.');
        }
        if (!trim($properties['preg26'])) {
            $errors[] = new Error('preg26', 'No puede estar vacía la pregunta 26.');
        }
        if (!trim($properties['preg27'])) {
            $errors[] = new Error('preg27', 'No puede estar vacía la pregunta 27.');
        }
        if (!trim($properties['preg28'])) {
            $errors[] = new Error('preg28', 'No puede estar vacía la pregunta 28.');
        }
        if (!trim($properties['preg29'])) {
            $errors[] = new Error('preg29', 'No puede estar vacía la pregunta 29.');
        }
        if (!trim($properties['preg30'])) {
            $errors[] = new Error('preg30', 'No puede estar vacía la pregunta 30.');
        }
        if (!trim($properties['preg31'])) {
            $errors[] = new Error('preg31', 'No puede estar vacía la pregunta 31.');
        }
        if (!trim($properties['preg32'])) {
            $errors[] = new Error('preg32', 'No puede estar vacía la pregunta 32.');
        }        
        if (!trim($properties['preg33'])) {
            $errors[] = new Error('preg33', 'No puede estar vacía la pregunta 33.');
        }        
        return $errors;
    }
}
