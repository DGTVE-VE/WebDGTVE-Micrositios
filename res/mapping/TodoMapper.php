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
 * Mapper for {@link Todo} from array.
 * @see TodoValidator
 */
final class TodoMapper {

    private function __construct() {
    }

    /**
     * Maps array to the given {@link Todo}.
     * <p>
     * Expected properties are:
     * <ul>
     *   <li>id</li>
     *   <li>priority</li>
     *   <li>created_on</li>
     *   <li>due_on</li>
     *   <li>last_modified_on</li>
     *   <li>title</li>
     *   <li>description</li>
     *   <li>comment</li>
     *   <li>status</li>
     *   <li>deleted</li>
     * </ul>
     * @param Todo $todo
     * @param array $properties
     */
    public static function map(Todo $todo, array $properties) {
        if (array_key_exists('id', $properties)) {
            $todo->setId($properties['id']);
        }
        if (array_key_exists('created_on', $properties)) {
            $createdOn = self::createDateTime($properties['created_on']);
            if ($createdOn) {
                $todo->setCreatedOn($createdOn);
            }
        }        
        if (array_key_exists('nombre', $properties)) {
            $todo->setNombre(trim($properties['nombre']));
        }
        if (array_key_exists('genero', $properties)) {
            $todo->setGenero(trim($properties['genero']));
        }
        if (array_key_exists('edad', $properties)) {
            $todo->setEdad(trim($properties['edad']));
        }
        if (array_key_exists('region', $properties)) {
            $todo->setRegion(trim($properties['region']));
        }
        if (array_key_exists('nacionalidad', $properties)) {
            $todo->setNacionalidad(trim($properties['nacionalidad']));
        }
        if (array_key_exists('residencia', $properties)) {
            $todo->setResidencia(trim($properties['residencia']));
        }
        if (array_key_exists('profesion', $properties)) {
            $todo->setProfesion(trim($properties['profesion']));
        }
        if (array_key_exists('email', $properties)) {
            $todo->setEmail(trim($properties['email']));
        }
        if (array_key_exists('edoCivil', $properties)) {
            $todo->setEdoCivil(trim($properties['edoCivil']));
        }
        if (array_key_exists('numHijos', $properties)) {
            $todo->setNumHijos(trim($properties['numHijos']));
        }
        if (array_key_exists('comment', $properties)) {
            $todo->setComment(trim($properties['comment']));
        }
        if (array_key_exists('deleted', $properties)) {
            $todo->setDeleted($properties['deleted']);
        }
        if (array_key_exists('resultado', $properties)) {
            $todo->setResultado(trim($properties['resultado']));
        }
        if (array_key_exists('resiliencia', $properties)) {
            $todo->setResiliencia(trim($properties['resiliencia']));
        }        
            $sumatoria = 0;
            if (array_key_exists('preg1', $properties)) {
                $sumatoria = ($properties['preg1'] == "Si") ? 1 : (($properties['preg1']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg2', $properties)) {
                $sumatoria += ($properties['preg2'] == "Si") ? 1 : (($properties['preg2']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg3', $properties)) {
                $sumatoria += ($properties['preg3'] == "Si") ? 1 : (($properties['preg3']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg4', $properties)) {
                $sumatoria += ($properties['preg4'] == "Si") ? 1 : (($properties['preg4']) == "Aveces" ? (1 / 2) : -1);                
            }
            if (array_key_exists('preg5', $properties)) {
                $sumatoria += ($properties['preg5'] == "Si") ? 1 : (($properties['preg5']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg6', $properties)) {
                $sumatoria += ($properties['preg6'] == "No") ? 1 : (($properties['preg6']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg7', $properties)) {
                $sumatoria += ($properties['preg7'] == "Si") ? 1 : (($properties['preg7']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg8', $properties)) {
                $sumatoria += ($properties['preg8'] == "Si") ? 1 : (($properties['preg8']) == "Aveces" ? (1 / 2) : -1);                
            }
            if (array_key_exists('preg9', $properties)) {
                $sumatoria += ($properties['preg9'] == "Si") ? 1 : (($properties['preg8']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg10', $properties)) {
                $sumatoria += ($properties['preg10'] == "Si") ? 1 : (($properties['preg10']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg11', $properties)) {
                $sumatoria += ($properties['preg11'] == "Si") ? 1 : (($properties['preg11']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg12', $properties)) {
                $sumatoria += ($properties['preg12'] == "Si") ? 1 : (($properties['preg12']) == "Aveces" ? (1 / 2) : -1);                
            }
            if (array_key_exists('preg13', $properties)) {
                $sumatoria += ($properties['preg13'] == "No") ? 1 : (($properties['preg13']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg14', $properties)) {
                $sumatoria += ($properties['preg14'] == "No") ? 1 : (($properties['preg14']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg15', $properties)) {
                $sumatoria += ($properties['preg15'] == "Si") ? 1 : (($properties['preg15']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg16', $properties)) {
                $sumatoria += ($properties['preg16'] == "Si") ? 1 : (($properties['preg16']) == "Aveces" ? (1 / 2) : -1);                
            }
            if (array_key_exists('preg17', $properties)) {
                $sumatoria += ($properties['preg17'] == "Si") ? 1 : (($properties['preg17']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg18', $properties)) {
                $sumatoria += ($properties['preg18'] == "Si") ? 1 : (($properties['preg18']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg19', $properties)) {
                $sumatoria += ($properties['preg19'] == "Si") ? 1 : (($properties['preg19']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg20', $properties)) {
                $sumatoria += ($properties['preg20'] == "Si") ? 1 : (($properties['preg20']) == "Aveces" ? (1 / 2) : -1);                
            }
            if (array_key_exists('preg21', $properties)) {
                $sumatoria += ($properties['preg21'] == "No") ? 1 : (($properties['preg21']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg22', $properties)) {
                $sumatoria += ($properties['preg22'] == "Si") ? 1 : (($properties['preg22']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg23', $properties)) {
                $sumatoria += ($properties['preg23'] == "No") ? 1 : (($properties['preg23']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg24', $properties)) {
                $sumatoria += ($properties['preg24'] == "No") ? 1 : (($properties['preg24']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg25', $properties)) {
                $sumatoria += ($properties['preg25'] == "Si") ? 1 : (($properties['preg25']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg26', $properties)) {
                $sumatoria += ($properties['preg26'] == "No") ? 1 : (($properties['preg26']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg27', $properties)) {
                $sumatoria += ($properties['preg27'] == "Si") ? 1 : (($properties['preg27']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg28', $properties)) {
                $sumatoria += ($properties['preg28'] == "Si") ? 1 : (($properties['preg28']) == "Aveces" ? (1 / 2) : -1);                
            }
            if (array_key_exists('preg29', $properties)) {
                $sumatoria += ($properties['preg29'] == "Si") ? 1 : (($properties['preg29']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg30', $properties)) {
                $sumatoria += ($properties['preg30'] == "No") ? 1 : (($properties['preg30']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg31', $properties)) {
                $sumatoria += ($properties['preg31'] == "No") ? 1 : (($properties['preg31']) == "Aveces" ? (1 / 2) : -1);
            }
            if (array_key_exists('preg32', $properties)) {
                $sumatoria += ($properties['preg32'] == "Si") ? 1 : (($properties['preg32']) == "Aveces" ? (1 / 2) : -1);
                
            }
            if (array_key_exists('preg33', $properties)) {
                $sumatoria += ($properties['preg33'] == "No") ? 1 : (($properties['preg33']) == "Aveces" ? (1 / 2) : -1);
                $todo->setResultado($sumatoria);
            }            
    }

    private static function createDateTime($input) {
        return DateTime::createFromFormat('Y-n-j H:i:s', $input);
    }

}
