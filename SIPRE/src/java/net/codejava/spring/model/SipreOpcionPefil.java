/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_OPCION_PEFIL")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreOpcionPefil.findAll", query = "SELECT s FROM SipreOpcionPefil s")})
public class SipreOpcionPefil implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    private Long id;
    @Basic(optional = false)
    @Column(name = "ID_OPCION_SISTEMA")
    private long idOpcionSistema;
    @Basic(optional = false)
    @Column(name = "ID_PERFIL")
    private long idPerfil;
    @Basic(optional = false)
    private long estado;

    public SipreOpcionPefil() {
    }

    public SipreOpcionPefil(Long id) {
        this.id = id;
    }

    public SipreOpcionPefil(Long id, long idOpcionSistema, long idPerfil, long estado) {
        this.id = id;
        this.idOpcionSistema = idOpcionSistema;
        this.idPerfil = idPerfil;
        this.estado = estado;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public long getIdOpcionSistema() {
        return idOpcionSistema;
    }

    public void setIdOpcionSistema(long idOpcionSistema) {
        this.idOpcionSistema = idOpcionSistema;
    }

    public long getIdPerfil() {
        return idPerfil;
    }

    public void setIdPerfil(long idPerfil) {
        this.idPerfil = idPerfil;
    }

    public long getEstado() {
        return estado;
    }

    public void setEstado(long estado) {
        this.estado = estado;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreOpcionPefil)) {
            return false;
        }
        SipreOpcionPefil other = (SipreOpcionPefil) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreOpcionPefil[ id=" + id + " ]";
    }
    
}
