/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_USUARIO_ROL")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreUsuarioRol.findAll", query = "SELECT s FROM SipreUsuarioRol s")})
public class SipreUsuarioRol implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreUsuarioRolPK sipreUsuarioRolPK;
    @JoinColumn(name = "CROL_CODIGO", referencedColumnName = "CROL_CODIGO", insertable = false, updatable = false)
    @ManyToOne(optional = false)
    private SipreRol sipreRol;

    public SipreUsuarioRol() {
    }

    public SipreUsuarioRol(SipreUsuarioRolPK sipreUsuarioRolPK) {
        this.sipreUsuarioRolPK = sipreUsuarioRolPK;
    }

    public SipreUsuarioRol(String cusuarioCodigo, String crolCodigo) {
        this.sipreUsuarioRolPK = new SipreUsuarioRolPK(cusuarioCodigo, crolCodigo);
    }

    public SipreUsuarioRolPK getSipreUsuarioRolPK() {
        return sipreUsuarioRolPK;
    }

    public void setSipreUsuarioRolPK(SipreUsuarioRolPK sipreUsuarioRolPK) {
        this.sipreUsuarioRolPK = sipreUsuarioRolPK;
    }

    public SipreRol getSipreRol() {
        return sipreRol;
    }

    public void setSipreRol(SipreRol sipreRol) {
        this.sipreRol = sipreRol;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreUsuarioRolPK != null ? sipreUsuarioRolPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreUsuarioRol)) {
            return false;
        }
        SipreUsuarioRol other = (SipreUsuarioRol) object;
        if ((this.sipreUsuarioRolPK == null && other.sipreUsuarioRolPK != null) || (this.sipreUsuarioRolPK != null && !this.sipreUsuarioRolPK.equals(other.sipreUsuarioRolPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreUsuarioRol[ sipreUsuarioRolPK=" + sipreUsuarioRolPK + " ]";
    }
    
}
