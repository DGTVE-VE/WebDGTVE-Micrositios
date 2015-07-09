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
 * Model class representing one TODO item.
 */
final class Todo {

    /** @var int */
    private $id;
    /** @var string */
    private $nombre;
    /** @var string */    
    private $genero;
    /** @var string */
    private $edad;
    /** @var string */    
    private $region;    
    /** @var string */    
    private $nacionalidad;   
    /** @var string */    
    private $residencia;   
    /** @var string */    
    private $profesion; 
    /** @var string */    
    private $email;
    /** @var string */    
    private $edoCivil; 
    /** @var string */    
    private $numHijos; 
    
    /** @var DateTime */
    private $createdOn;
    /** @var string */
    private $comment;
    /** @var boolean */
    private $deleted;
    /** @var Integer */
    private $resultado;
    /** @var string */
    private $resiliencia;
    


    /**
     * Create new {@link Todo} with default properties set.
     */
    public function __construct() {
        $now = new DateTime();
        $this->setCreatedOn($now);        
        $this->setDeleted(false);
    }

    //~ Getters & setters

    /**
     * @return int <i>null</i> if not persistent
     */
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        if ($this->id !== null && $this->id != $id) {
            throw new Exception('Cannot change identifier to ' . $id . ', already set to ' . $this->id);
        }
        $this->id = (int) $id;
    }

    /**
     * @return DateTime
     */
    public function getCreatedOn() {
        return $this->createdOn;
    }

    public function setCreatedOn(DateTime $createdOn) {
        $this->createdOn = $createdOn;
    }

    /**
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }    
    
    /**
     * @return string
     */
    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    /**
    * @return string
    */
    public function getRegion() {
        return $this->region;
    }

    public function setRegion($region) {
        $this->region = $region;
    }
    
    /**
    * @return string
    */
    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }    
    
    /**
    * @return string
    */
    public function getResidencia() {
        return $this->residencia;
    }

    public function setResidencia($residencia) {
        $this->residencia = $residencia;
    }
    
    /**
    * @return string
    */
    public function getProfesion() {
        return $this->profesion;
    }

    public function setProfesion($profesion) {
        $this->profesion = $profesion;
    }    
    
    /**
    * @return string
    */
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }    
    
    /**
    * @return string
    */
    public function getEdoCivil() {
        return $this->edoCivil;
    }

    public function setEdoCivil($edoCivil) {
        $this->edoCivil = $edoCivil;
    }    
    
    /**
    * @return string
    */
    public function getNumHijos() {
        return $this->numHijos;
    }

    public function setNumHijos($numHijos) {
        $this->numHijos = $numHijos;
    }    
    
    /**
     * @return string
     */
    public function getComment() {
        return $this->comment;
    }

    public function setComment($comment) {
        $this->comment = $comment;
    }    

    /**
     * @return boolean
     */
    public function getDeleted() {
        return $this->deleted;
    }

    public function setDeleted($deleted) {
        $this->deleted = (bool) $deleted;
    }
    
    /**
     * @return integer
     */
    public function getResultado() {
        return $this->resultado;
    }
    
    public function getResultadoStr() {
        return (string)$this->resultado;
    }

    public function setResultado($resultado) {
        $this->resultado = $resultado;
    }   
    
    /**
     * @return integer
     */
    public function getResiliencia() {
        return $this->resiliencia;
    }

    public function setResiliencia($resiliencia) {
        $this->resiliencia = $resiliencia;
    } 

}
